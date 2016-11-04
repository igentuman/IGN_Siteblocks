<?php

/**
 * Class IGN_Siteblocks_Model_Block
 * @method getBlockStatus()
 * @method getContent()
 *
 */
class IGN_Siteblocks_Model_Block extends Mage_Core_Model_Abstract {

    protected $_eventPrefix = 'siteblocks_block';

    public function _construct()
    {
        parent::_construct();
        $this->_init('siteblocks/block');

    }
}
