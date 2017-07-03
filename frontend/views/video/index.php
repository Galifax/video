<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Videos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::button('Добавить видео', ['value' => Url::to(['create']) , 'class' => 'btn btn-success' , 'id' => 'modalButton']) ?>

    <?php
    Modal::begin([
        'header' => '<h2 class="text-center">Новое видео</h2>',

        'id' => 'modal',
        'size' => 'modal-lg',

    ]);

    echo "<div id='modalContent'></div>";

    Modal::end();
    ?>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'name',
            'video',
            'views',
            // 'likes',

            ['class' => 'yii\grid\ActionColumn',
             'template' => '{delete} {update}'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
