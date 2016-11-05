<?php

class IGN_Siteblocks_Block_Adminhtml_Siteblocks_Edit_Tab_Main extends Mage_Adminhtml_Block_Widget_Form
{

    public function getTabLabel()
    {
        return $this->__('Main');
    }

    public function getTabTitle()
    {
        return $this->__('Main');
    }

    public function canShowTab()
    {
        return true;
    }

    public function isHidden()
    {
        return false;
    }

    /**
     * Init form
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('block_form');
        $this->setTitle(Mage::helper('siteblocks')->__('Block Information'));
    }

    protected function _prepareForm()
    {
        $model = Mage::registry('siteblocks_block');
        $form = new Varien_Data_Form();


        $form->setHtmlIdPrefix('block_');

        $fieldset = $form->addFieldset('base_fieldset',
            array(
                'legend'=>Mage::helper('siteblocks')->__('General Information'),
                'class' => 'fieldset-wide')
        );

        if ($model->getBlockId()) {
            $fieldset->addField('block_id', 'hidden', array(
                'name' => 'block_id',
            ));
        }

        $fieldset->addField('title', 'text', array(
            'name'      => 'title',
            'label'     => Mage::helper('siteblocks')->__('Block Title'),
            'title'     => Mage::helper('siteblocks')->__('Block Title'),
            'required'  => true,
        ));

        //$fieldset->addType('myimage','IGN_Siteblocks_Block_Adminhtml_Siteblocks_Edit_Renderer_Myimage');

        $fieldset->addField('image', 'myimage', array(
            'name'      => 'image',
            'label'     => Mage::helper('siteblocks')->__('Image'),
            'title'     => Mage::helper('siteblocks')->__('Image'),
            'required'  => true,
        ));



        $fieldset->addField('block_status', 'select', array(
            'label'     => Mage::helper('siteblocks')->__('Status'),
            'title'     => Mage::helper('siteblocks')->__('Status'),
            'name'      => 'block_status',
            'required'  => true,
            'options'   => Mage::getModel('siteblocks/source_status')->toArray(),
        ));


        $fieldset->addField('content', 'editor', array(
            'name'      => 'content',
            'label'     => Mage::helper('siteblocks')->__('Content'),
            'title'     => Mage::helper('siteblocks')->__('Content'),
            'style'     => 'height:36em',
            'required'  => true,
            'config'    => Mage::getSingleton('cms/wysiwyg_config')->getConfig()

        ));

        $form->setValues($model->getData());
        $this->setForm($form);

        return parent::_prepareForm();
    }

    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
            $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
        }
    }
}
