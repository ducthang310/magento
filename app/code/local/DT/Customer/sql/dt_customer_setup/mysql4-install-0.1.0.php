<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DucThang
 * Date: 6/20/14
 * Time: 11:58 AM
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */

try {
    $installer = $this;
    $installer->startSetup();

    // Create attribute with type 'customer'
    $installer->addAttribute('customer', 'product_ids', array(
        'type' => 'text',
        'input' => 'text',
        'label' => 'Product Ids',
        'visible' => false,
        'required' => false,
        'sort_order' => 15,
        'is_visible' => 0,
        'is_user_defined' => 1
    ));

    $installer->endSetup();

} catch (Excpetion $e) {
    Mage::logException($e);
    Mage::log("ERROR IN SETUP " . $e->getMessage());
}