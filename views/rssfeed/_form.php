<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\rssfeed\models\Rssfeed */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rssfeed-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rss_no')->textInput() ?>

    <?= $form->field($model, 'rss_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rss_aciklama')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rss_link')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
