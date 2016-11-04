<?php

class IGN_Siteblocks_Block_Adminhtml_Siteblocks_Grid_Renderer_Image
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        if( ! $row->getImage()) {
            return '';
        }
        $url = Mage::getBaseUrl('media') . 'siteblocks' .DS .$row->getImage();
        $html = "<img src='$url' width='100' height='auto'>";
        return $html;
    }
}
