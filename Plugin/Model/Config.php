<?php
/*
 * Copyright © 2019 Zekinah Lecaros. All rights reserved.
 * zjlecaros@gmail.com
 */

namespace Zone\AdvancedSortBy\Plugin\Model;

use Magento\Store\Model\StoreManagerInterface;
use Zone\AdvancedSortBy\Helper\Data;

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
        StoreManagerInterface $storeManager,
        Data $dataHelper
    ) {
        $this->_storeManager = $storeManager;
        $this->_dataHelper = $dataHelper;
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
        if($this->_dataHelper->getGeneralConfig('enable')){
            // Remove specific default sorting options
            $default_options = [];
            $default_options['name'] = $options['name'];
            $default_options['price'] = $options['price'];
            unset($options['position']);

            // Update the Label
            if($this->_dataHelper->getWidgetConfig('enable_featured')) {
                $customOption['featured'] = __('Featured');
            }

            if($this->_dataHelper->getWidgetConfig('enable_best_selling')) {
                $customOption['best_selling'] = __('Best Selling');
            }

            if($this->_dataHelper->getWidgetConfig('enable_alphabetical')) {
                $customOption['name_asc'] = $default_options['name'];
                $customOption['name_desc'] = $default_options['name'];

                $customOption['name_asc'] = __('Alphabetically, A-Z');
                $customOption['name_desc'] = __('Alphabetically, Z-A');
            }

            if($this->_dataHelper->getWidgetConfig('enable_price')) {
                $customOption['price_asc'] = $default_options['price'];
                $customOption['price_desc'] = $default_options['price'];

                $customOption['price_asc'] = __('Price, low to high');
                $customOption['price_desc'] = __('Price, high to low');
            }

            if($this->_dataHelper->getWidgetConfig('enable_date')) {
                $customOption['created_asc'] = __('Date, old to new');
                $customOption['created_dec'] = __('Date, new to old');
            }
            $options = array_merge($customOption);
        }
        return $options;
    }
}
