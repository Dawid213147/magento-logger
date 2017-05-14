<?php

/**
 * Class init collection of logger resource
 *
 * @author Dawid
 */
class Kaliop_Logger_Model_Resource_Logger_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {
    
    /**
     *  Init collection of logger
     */
    public function _construct()
    {
        $this->_init('kaliop_logger/logger');
    }
}
