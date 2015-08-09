<?php

// 注册JS
\mivan\region\RegionAsset::register($this);
?>
<div class="form-group">

    <label class="control-label"><?=$label?></label>
    <div data-toggle="distpicker">
        <?= $form->field($model, 'province', [
            'template' => "{input}",
            'options' => [
                'tag' => 'span',
            ]
        ])->dropDownList([], ['data-province' => $model->province, 'class'=> 'form-control inline'])?>

        <?= $form->field($model, 'city', [
            'template' => "{input}",
            'options' => [
                'tag' => 'span',
            ]
        ])->dropDownList([], ['data-city' => $model->city, 'class'=> 'form-control inline'])?>
        <?= $form->field($model, 'district', [
            'template' => "{input}",
            'options' => [
                'tag' => 'span',
            ]
        ])->dropDownList([], ['data-district' => $model->district, 'class'=> 'form-control inline'])?>
    </div>

</div>


