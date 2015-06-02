<?php
/**
 * @var $this Letter
 */
?>
<table cellspacing="0" cellpadding="0" width="100%" bgcolor="#F5F5F5">
    <tbody><tr>
        <td width="15">
            <table cellspacing="0" cellpadding="0" width="15">
                <tbody><tr>
                    <td>
                        <div style="min-height:0;line-height:0;font-size:0">
                            &nbsp;
                        </div>
                    </td>
                </tr>
                </tbody></table>
        </td>
        <td align="center" style="padding:15px 0">
            <table cellspacing="0" cellpadding="0" width="600">
                <tbody><tr>
                    <td style="padding:35px 40px">
                        <table border="0" cellspacing="0" cellpadding="0" style="background-color:#ffffff">
                            <tbody><tr>
                                <td align="center" valign="top" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;">
                                    <table width="600" cellspacing="0" cellpadding="0" border="0" style="background: #EEEFEF no-repeat center top; font-size: 16px; color: #333; border:1px solid #dadee3;">
                                        <tbody><tr>
                                            <td width="600" valign="top">
                                                <p style="padding:12px;">
                                                    <a href="http://lv.gtflix.com" style="color: #F83600;font-weight: bold;font-size: 20px;text-decoration: none; "><?php echo Yii::app()->params['company'];?></a>                        </p>
                                            </td>
                                        </tr>
                                        </tbody></table>
                                    <table width="600" cellspacing="0" cellpadding="0" border="0" style="border-left:1px solid #dadee3;border-right:1px solid #dadee3;font-size:16px;">
                                        <tbody><tr>
                                            <td width="600" align="left" valign="top" style="padding: 20px">
                                                <?php echo $body;?>
                                            </td>
                                        </tr>
                                        </tbody></table>
                                    <table width="600" cellspacing="0" cellpadding="0" border="0" style="background: #4a4846 repeat-x center top; color:#D5D5D5">
                                        <tbody><tr>
                                            <td valign="top" width="560" style="padding: 15px;">
                                                <p style="font-size: 12px;color:gray">
                                                    Вы можете отписаться от рассылки перейдя по
                                                    <a style="font-size: 12px; color: gray;" href="<?php echo Yii::app()->params['url'].'/unsubscribe/index?hash='.md5($this->subscriber_id).'&email='.urlencode($this->subscriber->email);?>">
                                                        ссылке
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </td>
                            </tr>
                            </tbody></table>
                    </td>
                </tr>
                </tbody></table>
        </td>
        <td width="15">
            <table cellspacing="0" cellpadding="0" width="15">
                <tbody><tr>
                    <td>
                        <div style="min-height:0;line-height:0;font-size:0">
                            &nbsp;
                        </div>
                    </td>
                </tr>
                </tbody></table>
        </td>
    </tr>
    </tbody></table>