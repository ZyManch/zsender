<?php

/**
* This is the model class for table "letter".
*
* The followings are the available columns in table 'letter':
    * @property string $id
    * @property string $title
    * @property string $body
    * @property string $subscriber_id
    * @property string $status
    *
    * The followings are the available model relations:
            * @property Subscriber $subscriber
    */
class SearchLetter extends CLetter {

    public function __construct($scenario = 'search') {
        parent::__construct($scenario);
    }

    public function rules()	{
        return array(
            array('id, title, body, subscriber_id, status', 'safe', 'on'=>'search'),
        );
    }

    public function search() {

        $criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('subscriber_id',$this->subscriber_id,true);
		$criteria->compare('status',$this->status,true);
        $criteria->order = 'id desc';
        return new CActiveDataProvider('Letter', array(
            'criteria'=>$criteria,
            'pagination'=>array('pageSize'=>40),

        ));
    }

    public function save() {
        throw new Exception('Its search only model');
    }

}
