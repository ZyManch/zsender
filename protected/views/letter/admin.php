<?php
/* @var $this LetterController */
/* @var $model Letter */


?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-xs-12">
        <div class="page-header">
            <h2>Письма</h2>
        </div>


        <?php $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'letter-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'itemsCssClass' => 'table table-hover',
            'columns'=>array(
                'id',
                'title',
                'subscriber_id',
                'status',
                array(
                    'class'=>'CButtonColumn',
                ),
            ),
        )); ?>
    </div>
</div>