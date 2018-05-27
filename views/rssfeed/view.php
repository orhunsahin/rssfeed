<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\rssfeed\models\Rssfeed */

$this->title = $model->rss_no;
$this->params['breadcrumbs'][] = ['label' => 'Rssfeeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rssfeed-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Güncelle', ['update', 'id' => $model->rss_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->rss_no], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Kaydı silmek istiyor musun ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'rss_no',
            'rss_adi',
            'rss_aciklama:ntext',
            'rss_link:ntext',
        ],
    ]) ?>

</div>
