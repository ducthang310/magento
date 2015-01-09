<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DucThang
 * Date: 6/19/14
 * Time: 8:35 PM
 */ 
class DT_Customer_Model_Customer_Customer extends Mage_Customer_Model_Customer {

    public function getProducts() {
        $productIds = $this->getData('product_ids');
        $productIds = explode(',', $productIds);
        return $productIds;
    }
}