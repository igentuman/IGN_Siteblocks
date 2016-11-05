<?php
class IGN_Siteblocks_Block_Adminhtml_Siteblocks_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('block_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('siteblocks')->__('Block Information'));
    }

    protected function _prepareLayout()
    {
        $this->addTab('main',array(
            'label' => Mage::helper('siteblocks')->__('Main'),
            'title' => Mage::helper('siteblocks')->__('Main'),
            'content' => $this->getLayout()->createBlock('siteblocks/adminhtml_siteblocks_edit_tab_main')->toHtml(),
            'active' => ($this->getRequest()->getParam('tab') == 'block_info_tabs_main') ? true : false,
        ));

        return parent::_prepareLayout();
    }
}
