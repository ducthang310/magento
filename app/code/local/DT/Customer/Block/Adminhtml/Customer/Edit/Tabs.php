<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DucThang
 * Date: 6/19/14
 * Time: 8:36 PM
 */ 
class DT_Customer_Block_Adminhtml_Customer_Edit_Tabs extends Mage_Adminhtml_Block_Customer_Edit_Tabs {


    protected function _beforeToHtml()
    {
        $this->addTab('products', array(
            'label'     => Mage::helper('customer')->__('Manage Product'),
            'content'   => $this->getLayout()->createBlock('dt_customer/adminhtml_customer_edit_tab_product')->toHtml()
        ));
        return parent::_beforeToHtml();
    }

}