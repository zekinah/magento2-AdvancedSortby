# AdvancedSortBy
Features of Advanced Sort by for Magento 2
Backend
* Option to On and Off module
  * Goto Stores -> Configuration -> Zone -> Advanced Sorting
Frontend
Sort By Options:
* Featured
* Best Selling
* Price, low to high
* Price, high to low
* Alphabetically, A-Z
* Alphabetically, Z-A
* Date, old to new
* Date, new to old

Enable module:
```
php -f bin/magento module:enable Zone_AdvancedSortBy
```

Disable module:
```
php -f bin/magento module:disable Zone_AdvancedSortBy
```

Update system:
```
php -f bin/magento setup:upgrade
php -f bin/magento cache:flush
php -f bin/magento cache:clean
```
