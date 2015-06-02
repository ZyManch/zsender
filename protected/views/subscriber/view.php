<?php
/* @var $this SubscriberController */
/* @var $model Subscriber */

?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-xs-12">
        <div class="page-header">
            <h2>Просмотр подписчика #<?php echo $model->id; ?></h2>
        </div>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'domain',
		'status',
	),
)); ?>
</div>
</div>