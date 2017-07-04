<?php

/* @var $this yii\web\View */

$this->title = 'Video service';
?>
<div class="site-index">


 <?php
 foreach($model as $video):?>
 <ul>
    <li><?=$video->name?></li>
     <li><?=$video->user_id?></li>
</ul>
 <?php endforeach; ?>   

   
</div>
