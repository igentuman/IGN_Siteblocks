<?php
/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

$installer->run("
ALTER TABLE `{$this->getTable('siteblocks/block')}` ADD `conditions_serialized` TEXT NOT NULL;
");

$installer->endSetup();