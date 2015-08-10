<?php

namespace mivan\region;
use yii\base\Widget;

class Region extends Widget
{
    public $form;
    public $model;
    public $label;
    public $fields;

    public function run()
    {
        return $this->render('region', [
            'form' => $this->form,
            'model' => $this->model,
            'label' => $this->label,
            'fields' => $this->fields,
        ]);
    }

}
