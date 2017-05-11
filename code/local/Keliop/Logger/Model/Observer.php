<?php

/**
 * Description of Observer
 *
 * @author Dawid
 */
class Keliop_Logger_Model_Observer extends Mage_Core_Model_Abstract {

    /**
     * 
     * @param Varien_Event_Observer $observer
     */
    public function customerLogEvent(Varien_Event_Observer $observer) {
        
        $customerData = $observer->getCustomer()->getData();
        $customerName = $customerData['firstname'] . " " . $customerData['lastname'];
        $eventName = substr(strrchr($observer->getEvent()->getName(), "_"), 1);
        $model = Mage::getModel('keliop_logger/logger');

        $toSave = [
            'user_name' => $customerName,
            'action' => $eventName
        ];
        
        try {
            $model->setData($toSave);
            $model->save();
        } catch (Exception $e) {
            Mage::log($e);
        }
    }

}
