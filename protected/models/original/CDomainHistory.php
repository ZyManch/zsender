<?php

/**
* This is the model class for table "domain_history".
*
* The followings are the available columns in table 'domain_history':
    * @property string $id
    * @property string $domain
    * @property string $last_sent_date
    * @property string $can_send_date
*/
class CDomainHistory extends ActiveRecord {

    public function tableName()	{
        return 'domain_history';
    }

    public function rules()	{
        return array(
            array('domain, last_sent_date', 'required'),
			array('domain', 'length', 'max'=>128),
			array('can_send_date', 'safe')        );
    }

    /**
    * @return array relational rules.
    */
    protected function _baseRelations()	{
        return array(
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'domain' => 'Domain',
            'last_sent_date' => 'Last Sent Date',
            'can_send_date' => 'Can Send Date',
        );
    }


}
