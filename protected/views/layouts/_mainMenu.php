<?php
/**
 * Created by PhpStorm.
 * User: Helen
 * Date: 08.03.2015
 * Time: 1:07
 * @var $this Controller
 */
$menu = array(
    array(
        'label' => 'Письма',
        'url' => array('letter/admin'),
        'icon'=>'th-list'
    ),
    array(
        'label' => 'Создать рассылку',
        'url' => array('letter/create'),
        'icon'=>'mail-forward'
    ),
    array(
        'label' => 'Адресаты',
        'url' => array('subscriber/admin'),
        'icon'=>'child'
    ),
    array(
        'label' => 'Добавить адресатов',
        'url' => array('subscriber/create'),
        'icon'=>'child'
    ),
    array(
        'label' => 'Выход',
        'url' => array('user/login'),
        'icon'=>'user'
    ),
);
if (Yii::app()->user->isGuest) {
    $menu = array();
}
?>

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <?php foreach ($menu as $submenu):?>
                <?php $this->renderPartial('//layouts/_mainMenuItem',array('menu'=>$submenu,'isTopMenu'=>true));?>
            <?php endforeach;?>
        </ul>
    </div>
</nav>