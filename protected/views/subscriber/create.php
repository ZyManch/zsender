<?php
/* @var $this SubscriberController */
/* @var $model Subscriber */


?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-xs-12">
            <div class="page-header">
                <h2>Создать подписчиков</h2>
            </div>
Введите адреса через точку с запятой
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
            </div>
            </div>