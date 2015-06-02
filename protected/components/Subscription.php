<?php
/**
 * Created by PhpStorm.
 * User: ZyManch
 * Date: 20.03.2015
 * Time: 16:43
 */

class BL_MailQueue_Subscription  {

    const LETTERS_BY_STEPS = 10;
    /**
     * @return boolean
     */
    public function process() {
        $this->empty_flag = false;
        $letters = $this->_getNextLettersToSend();
        if (!$letters) {
            $this->empty_flag=true;
            return true;
        }

        foreach ($letters as $letter) {
            try {
                $letter->send();
            } catch (Exception $e) {
                $letter->delete();
                $this->dumpError('Send error: %s. '. $e->getMessage(), __LINE__);
            }
        }

        return true;

    }

    /**
     * @return MailSubscription[]
     */
    protected function _getNextLettersToSend() {
        return MailSubscriptionQuery::create()->
            groupByDomainHistoryId()->
            useDomainHistoryQuery()->
                filterByCanSendDate(Core_Date::getDbTime(),Criteria::LESS_THAN)->
                orderByCanSendDate(Criteria::ASC)->
            endUse()->
            limit(self::LETTERS_BY_STEPS)->
            find();
    }



}