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
class SearchDomainHistory extends CDomainHistory {

    public function __construct($scenario = 'search') {
        parent::__construct($scenario);
    }

    public function rules()	{
        return array(
            array('id, domain, last_sent_date, can_send_date', 'safe', 'on'=>'search'),
        );
    }

    public function search() {

        $criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('domain',$this->domain,true);
		$criteria->compare('last_sent_date',$this->last_sent_date,true);
		$criteria->compare('can_send_date',$this->can_send_date,true);

        return new CActiveDataProvider('DomainHistory', array(
            'criteria'=>$criteria,
            'pagination'=>array('pageSize'=>40)
        ));
    }

    public function save() {
        throw new Exception('Its search only model');
    }

}
