<?php
/* @var $this SubscriberController */
/* @var $model Subscriber */

?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-xs-12">
        <div class="page-header">
            <h2>Подписчики</h2>
        </div>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'subscriber-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'itemsCssClass' => 'table table-hover',
	'columns'=>array(
		'id',
		'email',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
</div>