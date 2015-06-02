<?php

/**
* This is the model class for table "subscriber".
*
* The followings are the available columns in table 'subscriber':
*/
class Subscriber extends CSubscriber {

    public function beforeValidate() {
        $parts = explode('@', $this->email,2);
        $domainName =array_pop($parts);
        $history = DomainHistory::model()->findByAttributes(array('domain'=>$domainName));
        if (!$history) {
            $history = new DomainHistory();
            $history->domain = $domainName;
            $history->last_sent_date = date('Y-m-d H:i:s');
            $history->can_send_date = date('Y-m-d H:i:s');
            $history->save();
        }
        $this->domain_history_id = $history->id;
        return parent::beforeSave();
    }

}
