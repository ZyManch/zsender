<?php

/**
* This is the model class for table "letter".
*
* The followings are the available columns in table 'letter':
*/
class Letter extends CLetter {

    const DELAY = 180;

    public function send() {
        ob_start();
        $body = $this->body;
        include(dirname(__FILE_).'/views/layouts/_letter.php');
        $html = ob_get_contents();
        ob_end_clean();
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'To: '.$this->subscriber->email . "\r\n";
        $headers .= 'From: '.$this->from_email . "\r\n";
        $result = mail(
            $this->subscriber->email,
            $this->title,
            $html,
            $headers
        );
        if (!$result) {
            $this->subscriber->status = 'not_exist';
            $this->subscriber->save(false);
        }
        $this->subscriber->domainHistory->can_send_date = date('Y-m-d H:i:s',time()+self::DELAY);
        $this->subscriber->domainHistory->save(false);
        $this->status = 'success';
        $this->save(false);
    }
}
