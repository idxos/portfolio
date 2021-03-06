<?php namespace Backend\FormWidgets;

use Lang;
use Backend\Classes\FormWidgetBase;
use ApplicationException;
use SystemException;
use Illuminate\Database\Eloquent\Relations\Relation as RelationBase;

/**
 * Form Relationship
 * Renders a field prepopulated with a belongsTo and belongsToHasMany relation.
 *
 * @package october\backend
 * @author Alexey Bobkov, Samuel Georges
 */
class Relation extends FormWidgetBase
{
    //
    // Configurable properties
    //

    /**
     * @var string Model column to use for the name reference
     */
    public $nameFrom = 'name';

    /**
     * @var string Model column to use for the description reference
     */
    public $descriptionFrom = 'description';

    /**
     * @var string Empty value to use if the relation is singluar (belongsTo)
     */
    public $emptyOption;

    //
    // Object properties
    //

    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'relation';

    /**
     * @var FormField Object used for rendering a simple field type
     */
    public $renderFormField;

    /**
     * {@inheritDoc}
     */
    public function init()
    {
        $this->fillFromConfig([
            'nameFrom',
            'descriptionFrom',
            'emptyOption',
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('relation');
    }

    /**
     * Prepares the view data
     */
    public function prepareVars()
    {
        $this->vars['field'] = $this->makeRenderFormField();
    }

    /**
     * Makes the form object used for rendering a simple field type
     */
    protected function makeRenderFormField()
    {
        return $this->renderFormField = RelationBase::noConstraints(function () {

            $field = clone $this->formField;
            $relationObject = $this->getRelationObject();
            $query = $relationObject->newQuery();

            list($model, $attribute) = $this->resolveModelAttribute($this->valueFrom);
            $relationType = $model->getRelationType($attribute);
            $relationModel = $model->makeRelation($attribute);

            if (in_array($relationType, ['belongsToMany', 'morphToMany', 'morphedByMany', 'hasMany'])) {
                $field->type = 'checkboxlist';
            }
            elseif (in_array($relationType, ['belongsTo', 'hasOne'])) {
                $field->type = 'dropdown';
            }

            $field->placeholder = $this->emptyOption;

            // It is safe to assume that if the model and related model are of
            // the exact same class, then it cannot be related to itself
            if ($model->exists && (get_class($model) == get_class($relationModel))) {
                $query->where($relationModel->getKeyName(), '<>', $model->getKey());
            }

            // Even though "no constraints" is applied, belongsToMany constrains the query
            // by joining its pivot table. Remove all joins from the query.
            $query->getQuery()->getQuery()->joins = [];

            $treeTraits = ['October\Rain\Database\Traits\NestedTree', 'October\Rain\Database\Traits\SimpleTree'];
            if (count(array_intersect($treeTraits, class_uses($relationModel))) > 0) {
                $field->options = $query->listsNested($this->nameFrom, $relationModel->getKeyName());
            }
            else {
                $field->options = $query->lists($this->nameFrom, $relationModel->getKeyName());
            }

            return $field;
        });
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveValue($value)
    {
        if (is_string($value) && !strlen($value)) {
            return null;
        }

        if (is_array($value) && !count($value)) {
            return null;
        }

        return $value;
    }


    /**
     * Returns the value as a relation object from the model,
     * supports nesting via HTML array.
     * @return Relation
     */
    protected function getRelationObject()
    {
        list($model, $attribute) = $this->resolveModelAttribute($this->valueFrom);

        if (!$model->hasRelation($attribute)) {
            throw new ApplicationException(Lang::get('backend::lang.model.missing_relation', [
                'class' => get_class($model),
                'relation' => $attribute
            ]));
        }

        return $model->{$attribute}();
    }

}
