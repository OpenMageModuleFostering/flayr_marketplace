<?php

class Flayr_Marketplace_Model_Flayrpay extends Mage_Payment_Model_Method_Abstract
{
    protected $_code = 'flayrpay';
	protected $_canUseInternal = true;
	protected $_canUseCheckout = false;
	
}

?>