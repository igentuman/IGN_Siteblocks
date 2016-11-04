<?php
class IGN_Siteblocks_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction()
    {
        $block = Mage::getModel('siteblocks/block')->load(1);
        $this->loadLayout();
        $this->renderLayout();
        $collection = Mage::getRessourceModel('siteblocks/block_collection')
            ->addFieldToSort('block_status',IGN_Siteblocks_Model_Source_Status::ENABLED);
        /** @var Mage_Cms_Model_Block $cms */
        $cms = Mage::getModel('cms/block');
        
    }
}