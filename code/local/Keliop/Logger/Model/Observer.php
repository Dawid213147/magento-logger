<?php

/**
 * Observer for login/logout events
 *
 * @author Dawid
 */
class Keliop_Logger_Model_Observer extends Mage_Core_Model_Abstract {

    /**
     * Method save log to db
     * @param Varien_Event_Observer $observer
     */
    public function customerLogEvent(Varien_Event_Observer $observer) {
        $configEnabled = Mage::getStoreConfig('keliop_section/general/logger_enabled');
        if ($configEnabled) {
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

}
