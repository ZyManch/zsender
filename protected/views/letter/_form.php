<?php
/* @var $this LetterController */
/* @var $model Letter */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'letter-form',
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
		<?php echo $form->labelEx($model,'title',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'title',array('class'=>'label label-danger')); ?>
        </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'body',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
		<?php echo $form->textArea($model,'body',array('rows'=>30, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'body',array('class'=>'label label-danger')); ?>
        </div>
	</div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'from_email',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model,'from_email',array('size'=>60,'maxlength'=>256,'class'=>'form-control')); ?>
            <?php echo $form->error($model,'from_email',array('class'=>'label label-danger')); ?>
        </div>
    </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'subscriber_id',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
        <?php if ($model->isNewRecord):?>
            all
        <?php else:?>
            <?php echo $form->textField($model,'subscriber.email',array('size'=>10,'maxlength'=>10,'class'=>'form-control','readonly'=>'readonly')); ?>
        <?php endif;?>

		<?php echo $form->error($model,'subscriber_id',array('class'=>'label label-danger')); ?>
        </div>
	</div>
    <?php if (!$model->isNewRecord):?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'status',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
		<?php echo $form->textField($model,'status',array('size'=>7,'maxlength'=>7,'class'=>'form-control','readonly'=>'readonly')); ?>
		<?php echo $form->error($model,'status',array('class'=>'label label-danger')); ?>
        </div>
	</div>
    <?php endif;?>
	<div class="form-group">
        <div class="col-sm-10">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить',array('class'=>'btn btn-primary')); ?>
        </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->