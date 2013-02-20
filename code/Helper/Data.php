<?php
/**
 * Simple extension that creates easy method for checking if a product is new
 *
 * @category    Ash
 * @package     Ash_NewProduct
 * @copyright   Copyright (c) 2010 August Ash, Inc. (http://www.augustash.com)
 * @author      August Ash Team <core@augustash.com>
 */

/**
 * Data helper
 *
 * @category    Ash
 * @package     Ash_NewProduct
 * @author      August Ash Team <core@augustash.com>
 */
class Ash_NewProduct_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Check if product object is known as "new"
     *
     * @param  Mage_Catalog_Model_Product $product
     * @return boolean
     */
    public function isNew(Mage_Catalog_Model_Product $product)
    {
        if ($product->getData('news_from_date') !== null
            || $product->getData('news_to_date') !== null) {

            // default to current time
            $current_date = new DateTime();
            $from_date    = new DateTime($product->getData('news_from_date'));
            $to_date      = new DateTime($product->getData('news_to_date'));

            if ($current_date >= $from_date && $current_date <= $to_date) {
                return true;
            }
        }

        return false;
    }
}
