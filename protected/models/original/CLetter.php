<?php

/**
* This is the model class for table "letter".
*
* The followings are the available columns in table 'letter':
    * @property string $id
    * @property string $title
    * @property string $body
    * @property string $from_email
    * @property string $subscriber_id
    * @property string $status
    *
    * The followings are the available model relations:
        * @property Subscriber $subscriber
*/
class CLetter extends ActiveRecord {

    public function tableName()	{
        return 'letter';
    }

    public function rules()	{
        return array(
            array('title, body, from_email, subscriber_id, status', 'required'),
			array('title, from_email', 'length', 'max'=>256),
			array('subscriber_id', 'length', 'max'=>10),
			array('status', 'length', 'max'=>7)        );
    }

    /**
    * @return array relational rules.
    */
    protected function _baseRelations()	{
        return array(
            'subscriber' => array(self::BELONGS_TO, 'Subscriber', 'subscriber_id'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'from_email' => 'From Email',
            'subscriber_id' => 'Subscriber',
            'status' => 'Status',
        );
    }


}
