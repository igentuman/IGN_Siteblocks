<?php
class IGN_Siteblocks_Model_Observer {

    /**
     * @param $bserver Varien_Event_Observer
     */
    public function checkout_cart_product_add_after($observer)
    {
        var_dump($observer->getEvent()->getData('quote_item')->getData());die;

    }

    public function controller_action_predispatch($observer)
    {

    }
}
