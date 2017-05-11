<?php

/**
 * Description of Logger
 *
 * @author Dawid
 */
class Keliop_Logger_Block_Adminhtml_Logger extends Mage_Adminhtml_Block_Widget_Grid_Container {
    
    /**
     * 
     */
    public function __construct()
    {
        $this->_blockGroup = 'keliop_logger';
        $this->_controller = 'adminhtml_logger';
        $this->_headerText = $this->__('Logger');
         
        parent::__construct();
    }
}
