<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\rssfeed\models\RssSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rssfeed-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rss_no') ?>

    <?= $form->field($model, 'rss_adi') ?>

    <?= $form->field($model, 'rss_aciklama') ?>

    <?= $form->field($model, 'rss_link') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
