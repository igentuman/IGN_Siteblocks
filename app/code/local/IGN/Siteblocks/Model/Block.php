<?php

/**
 * Class IGN_Siteblocks_Model_Block
 * @method getBlockStatus()
 * @method getContent()
 * @method getImage()
 */
class IGN_Siteblocks_Model_Block extends Mage_Rule_Model_Abstract {

    protected $_eventPrefix = 'siteblocks_block';

    public function getActionsInstance()
    {
        return Mage::getModel('catalogrule/rule_action_collection');
    }

    public function getConditionsInstance()
    {
        return Mage::getModel('catalogrule/rule_condition_combine');
    }

    public function _construct()
    {
        parent::_construct();
        $this->_init('siteblocks/block');

    }

    public function getImageSrc()
    {
        return Mage::getBaseUrl('media') . 'siteblocks' . DS . $this->getImage();
    }
}
