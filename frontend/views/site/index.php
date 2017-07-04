<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Video service';
?>
<div class="site-index">


 <?php 
 print_r($_POST);
 foreach($model as $video):?>
 <ul>
    <li><?=$video->name?> name</li> 
     <li><?=$video->user_id?> user id</li>
       <li><?=$video->likes?> likes</li>
       <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($video, 'likes') ?>
    <div class="form-group">
        <?= Html::submitButton('Лайкнуть', ['class' => 'btn btn-primary']) ?>
   </div>

<?php ActiveForm::end(); ?>
</ul>
 <?php endforeach; ?>   

   
</div>
