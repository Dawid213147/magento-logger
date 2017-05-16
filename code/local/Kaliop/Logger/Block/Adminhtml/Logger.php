<?php

/**
 * Class prepare block to create grid
 *
 * @author Dawid
 */
class Kaliop_Logger_Block_Adminhtml_Logger extends Mage_Adminhtml_Block_Widget_Grid_Container {
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->_blockGroup = 'kaliop_logger';
        $this->_controller = 'adminhtml_logger';
        $this->_headerText = $this->__('Logger');
         
        parent::__construct();
    }
}
