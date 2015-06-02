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
    */
class SearchSubscriber extends CSubscriber {

    public function __construct($scenario = 'search') {
        parent::__construct($scenario);
    }

    public function rules()	{
        return array(
            array('id, email, domain, status', 'safe', 'on'=>'search'),
        );
    }

    public function search() {

        $criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('domain_history_id',$this->domain_history_id,true);
		$criteria->compare('status',$this->status,true);
        $criteria->order = 'id desc';
        return new CActiveDataProvider('Subscriber', array(
            'criteria'=>$criteria,
            'pagination'=>array('pageSize'=>40)
        ));
    }

    public function save() {
        throw new Exception('Its search only model');
    }

}
