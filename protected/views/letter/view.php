<?php
/* @var $this LetterController */
/* @var $model Letter */


?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-xs-12">
        <div class="page-header">
            <h2>Просмотр письма #<?php echo $model->id; ?></h2>
        </div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'body',
		'subscriber_id',
		'status',
	),
)); ?>
</div>
</div>