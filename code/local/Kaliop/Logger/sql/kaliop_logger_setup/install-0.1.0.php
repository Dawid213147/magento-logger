<?php

$installer = $this;
 
$installer->startSetup();
 
$table = $installer->getConnection()
    ->newTable($installer->getTable('keliop_logger/logger'))
    ->addColumn('user_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, [
        'identity' => true,
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
        ], 'Id')
    ->addColumn('user_name', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, [
        'nullable' => false,
        ], 'username')
    ->addColumn('action', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, [
        'nullable' => false,
        ], 'action')
    ->addColumn('data', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, [
        'nullable' => false,
        'default' => Varien_Db_Ddl_Table::TIMESTAMP_INIT
        ], 'data');
$installer->getConnection()->createTable($table);
 
$installer->endSetup();
