<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\rssfeed\models\RssSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'RSS Feeds Kayıtları';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rssfeed-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('RSS ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rss_no',
            'rss_adi',
            'rss_aciklama:ntext',
            'rss_link:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
