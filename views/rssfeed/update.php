<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\rssfeed\models\Rssfeed */

$this->title = 'RSS Feed Kaydını Güncelle';
$this->params['breadcrumbs'][] = ['label' => 'Rssfeeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rss_no, 'url' => ['view', 'id' => $model->rss_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rssfeed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
