<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Greenmoney\Greenmoney\Block\Form;

/**
 * Abstract class for Cash On Delivery and Bank Transfer payment method form
 */
abstract class Greenmoney extends \Magento\Payment\Block\Form
{
    protected $_template = 'Greenmoney_Greenmoney::form/greenmoney.phtml';

}
