<?php
/*
 * Copyright © 2019 Zekinah Lecaros. All rights reserved.
 * zjlecaros@gmail.com
 */
namespace Zone\AdvancedSortBy\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

    const XML_PATH_ADVANCEDSORTBY = 'advancedsortby/';

    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    public function getGeneralConfig($code, $storeId = null)
    {

        return $this->getConfigValue(self::XML_PATH_ADVANCEDSORTBY . 'general/' . $code, $storeId);
    }
    public function getWidgetConfig($code, $storeId = null)
    {

        return $this->getConfigValue(self::XML_PATH_ADVANCEDSORTBY . 'widgetoption/' . $code, $storeId);
    }
}
