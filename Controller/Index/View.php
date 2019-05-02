<?php
/**
 * @category   Bluethink
 * @package    Bluethink_Comptest
 * @author     mohit.bluethink@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Bluethink\Comptest\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\NotFoundException;
use Bluethink\Comptest\Block\ComptestView;

class View extends \Magento\Framework\App\Action\Action
{
	protected $_comptestview;

	public function __construct(
        Context $context,
        ComptestView $comptestview
    ) {
        $this->_comptestview = $comptestview;
        parent::__construct($context);
    }

	public function execute()
    {
    	if(!$this->_comptestview->getSingleData()){
    		throw new NotFoundException(__('Parameter is incorrect.'));
    	}
    	
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
