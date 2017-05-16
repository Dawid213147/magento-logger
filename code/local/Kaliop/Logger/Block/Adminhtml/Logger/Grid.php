<?php

/**
 * Class generate grid
 *
 * @author Dawid
 */
class Kaliop_Logger_Block_Adminhtml_Logger_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();

        $this->setDefaultSort('id');
        $this->setId('kaliop_logger_grid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    /**
     * Methood return name of logger collection
     * @return string
     */
    protected function _getCollectionClass() {
        return 'kaliop_logger/logger_collection';
    }

    /**
     * Method prepare data to display in grid
     * @return object
     */
    protected function _prepareCollection() {
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    /**
     * Method sets column to grid
     * @return type
     */
    protected function _prepareColumns() {
        $this->addColumn('id', array(
            'header' => $this->__('User ID'),
            'align' => 'right',
            'width' => '50px',
            'index' => 'user_id'
                )
        );

        $this->addColumn('name', array(
            'header' => $this->__('User Name'),
            'index' => 'user_name'
                )
        );
        $this->addColumn('action', array(
            'header' => $this->__('Action'),
            'index' => 'action'
                )
        );
        $this->addColumn('data', array(
            'header' => $this->__('Data of Action'),
            'index' => 'data'
                )
        );

        return parent::_prepareColumns();
    }

}
