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
 * Product list
 *
 * @category   Ash
 * @package    Ash_NewProduct
 * @author      August Ash Team <core@augustash.com>
 */
class Ash_NewProduct_Block_Product_List extends Mage_Catalog_Block_Product_List
{
    /**
     * Retrieve loaded category collection
     *
     * @return Mage_Eav_Model_Entity_Collection_Abstract
     */
    protected function _getProductCollection()
    {
        parent::_getProductCollection();

        $this->_productCollection
            ->addAttributeToSelect('news_from_date')
            ->addAttributeToSelect('news_to_date');

        return $this->_productCollection;
    }
}
