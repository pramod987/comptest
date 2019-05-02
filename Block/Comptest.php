<?php
/**
 * @category   Bluethink
 * @package    Bluethink_Comptest
 * @author     mohit.bluethink@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Bluethink\Comptest\Block;

/**
 * Comptest content block
 */
class Comptest extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Bluethink Comptest Module'));
        
        return parent::_prepareLayout();
    }
}
