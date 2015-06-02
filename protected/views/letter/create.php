<?php
/* @var $this LetterController */
/* @var $model Letter */


?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-xs-12">
            <div class="page-header">
                <h2>Создать рассылку</h2>
            </div>

            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>