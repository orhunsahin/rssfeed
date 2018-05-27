<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model vendor\kouosl\rssfeed\models\Rssfeed */

$this->title = 'Rss Feed Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Rssfeeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rssfeed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
