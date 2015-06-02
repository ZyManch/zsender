<?php
/* @var $this SubscriberController */
/* @var $model Subscriber */


?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-xs-12">
    <div class="page-header">
        <h2>Редактировать подписчика <?php echo $model->id; ?></h2>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
        </div>