<?php

namespace PayTabs\Express\Controller\Standard;

/**
 * @category   MagePsycho
 * @package    PayTabs_Express
 * @author     Raj KB <magepsycho@gmail.com>
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Failure extends \PayTabs\Express\Controller\Standard
{
    public function execute()
    {
        #var_dump($_REQUEST); exit;
        $message = __('There is some error processing your request.');
        $this->_cancelOrder($this->getOrder(), $message);

        $this->messageManager->addError($message);
        $this->_checkoutSession->restoreQuote();
        $this->_redirect('checkout/cart');
    }
}