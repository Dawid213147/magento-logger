<?php

/**
 * Class init resource for logger module
 *
 * @author Dawid
 */
class Keliop_Logger_Model_Resource_Logger extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Init resource of logger
     */
    protected function _construct()
    {
        $this->_init('keliop_logger/logger', 'user_id');
    }
}