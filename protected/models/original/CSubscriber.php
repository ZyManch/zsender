<?php

/**
* This is the model class for table "subscriber".
*
* The followings are the available columns in table 'subscriber':
    * @property string $id
    * @property string $email
    * @property string $domain_history_id
    * @property string $status
    *
    * The followings are the available model relations:
        * @property Letter[] $letters
        * @property DomainHistory $domainHistory
*/
class CSubscriber extends ActiveRecord {

    public function tableName()	{
        return 'subscriber';
    }

    public function rules()	{
        return array(
            array('email, domain_history_id', 'required'),
			array('email', 'length', 'max'=>128),
			array('domain_history_id', 'length', 'max'=>10),
			array('status', 'length', 'max'=>12)        );
    }

    /**
    * @return array relational rules.
    */
    protected function _baseRelations()	{
        return array(
            'letters' => array(self::HAS_MANY, 'Letter', 'subscriber_id'),
            'domainHistory' => array(self::BELONGS_TO, 'DomainHistory', 'domain_history_id'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'email' => 'Email',
            'domain_history_id' => 'Domain History',
            'status' => 'Status',
        );
    }


}
