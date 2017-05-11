<?php

/**
 * Controller generate grid
 * @author dawid
 */
class Keliop_Logger_LoggerController extends Mage_Adminhtml_Controller_Action {

    /**
     * Action display grid in adminhtml
     */
    public function indexAction() {
        
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('keliop_logger/adminhtml_logger_grid'));
        $this->renderLayout();
    }

}
