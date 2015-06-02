<?php
/* @var $this LetterController */
/* @var $dataProvider CActiveDataProvider */


?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-xs-12">
        <div class="page-header">
            <h2>Письма</h2>
        </div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
        </div>
    </div>
