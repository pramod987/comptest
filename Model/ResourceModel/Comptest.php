<?php
/**
 * @category   Bluethink
 * @package    Bluethink_Comptest
 * @author     mohit.bluethink@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Bluethink\Comptest\Model\ResourceModel;

class Comptest extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('bluethink_comptest', 'comptest_id');   //here "bluethink_comptest" is table name and "comptest_id" is the primary key of custom table
    }
}