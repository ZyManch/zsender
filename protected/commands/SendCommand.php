<?php
/**
 * Created by PhpStorm.
 * User: ZyManch
 * Date: 02.06.2015
 * Time: 11:07
 */
class SendCommand extends CConsoleCommand {

    const LETTER_PER_STEP = 100;

    public function run($args) {
        $letters = $this->_getLettersToSend();
        foreach ($letters as $letter) {
            $letter->send();
        }
    }

    /**
     * @return Letter[]
     */
    protected function _getLettersToSend() {
        $criteria = new CDbCriteria();
        $criteria->compare('t.status','waiting');
        $criteria->with = array(
            'subscriber.domainHistory'
        );
        $criteria->addCondition('domainHistory.can_send_date < :now');
        $criteria->params[':now'] = date('Y-m-d H:i:s');
        $criteria->limit = self::LETTER_PER_STEP;
        $criteria->group = 'domainHistory.id';
        $criteria->order = 't.id ASC';
        return Letter::model()->findAll($criteria);
    }


}