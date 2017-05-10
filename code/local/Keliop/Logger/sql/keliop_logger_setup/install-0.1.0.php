<?php

$installer = $this;
 
$installer->startSetup();
 
$table = $installer->getConnection()
    ->newTable($installer->getTable('keliop_logger/logger'))
    ->addColumn('user_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
        ), 'Id')
    ->addColumn('user_name', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
        'nullable'  => false,
        ), 'username')
    ->addColumn('action', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
        'nullable'  => false,
        ), 'action')
    ->addColumn('date', Varien_Db_Ddl_Table::TYPE_DATE, null, array(
        'nullable'  => false,
        ), 'date');
$installer->getConnection()->createTable($table);
 
$installer->endSetup();
