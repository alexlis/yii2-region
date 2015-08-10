<?php

// 注册JS
\mivan\region\RegionAsset::register($this);
?>
<div class="form-group">

    <label class="control-label"><?=$label?></label>
    <div data-toggle="distpicker">

        <?php
        foreach($fields as $k => $v) {
            echo $form->field($model, $v, [
                'template' => "{input}",
                'options' => [
                    'tag' => 'span',
                ]
            ])->dropDownList([], ['data-province' => $model->$v, 'class'=> 'form-control inline']);
        }?>

    </div>

</div>


