<?php
/* @var $this SubscriberController */
/* @var $model Subscriber */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subscriber-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('class'=>'form-horizontal')
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email',array('class'=>'label label-danger')); ?>
            </div>
	</div>



	<div class="form-group buttons">
        <div class="col-sm-10">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить',array('class'=>'btn btn-primary')); ?>
        </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->