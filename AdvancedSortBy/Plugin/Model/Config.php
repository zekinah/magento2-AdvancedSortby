<?php
/*
 * Copyright © 2019 Zekinah Lecaros. All rights reserved.
 * zjlecaros@gmail.com
 */

namespace Zone\AdvancedSortBy\Plugin\Model;

use Magento\Store\Model\StoreManagerInterface;

/**
 * Class Config
 * @package Zone\AdvancedSortBy\Plugin\Model
 */
class Config
{

    /**
     * @var StoreManagerInterface
     */
    protected $_storeManager;

    /**
     * Config constructor.
     * @param StoreManagerInterface $storeManager
     *
     */
    public function __construct(
        StoreManagerInterface $storeManager
    ) {
        $this->_storeManager = $storeManager;
    }

    /**
     * Adding custom options and changing labels
     *
     * @param \Magento\Catalog\Model\Config $catalogConfig
     * @param [] $options
     * @return []
     */
    public function afterGetAttributeUsedForSortByArray(\Magento\Catalog\Model\Config $catalogConfig, $options)
    {
        // Remove specific default sorting options
        $default_options = [];
        $default_options['name'] = $options['name'];
        unset($options['position']);

        $customOption['name_asc'] = $default_options['name'];
        $customOption['name_desc'] = $default_options['name'];
        $customOption['price_asc'] = $default_options['price'];
        $customOption['price_desc'] = $default_options['price'];

        // Update the Label
        $customOption['featured'] = __('Featured');
        $customOption['best_selling'] = __('Best Selling');
        $customOption['price_asc'] = __('Price, low to high');
        $customOption['price_desc'] = __('Price, high to low');
        $customOption['name_asc'] = __('Alphabetically, A-Z');
        $customOption['name_desc'] = __('Alphabetically, Z-A');
        $customOption['created_asc'] = __('Date, old to new');
        $customOption['created_dec'] = __('Date, new to old');

        $options = array_merge($customOption);

        return $options;
    }
}
