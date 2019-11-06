# Magento 2 Advanced SortBy

This module provide new sorting options in product list and grid.

## Features

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

## Installation

Copy the content of the repo to the app/code/Zone/AdvancedSortBy/ folder

Enable module:
```
php bin/magento module:enable Zone_AdvancedSortBy
```

Disable module: (Optional)
```
php bin/magento module:disable Zone_AdvancedSortBy --clear-static-content
```

Update system:
```
php bin/magento setup:upgrade
php bin/magento cache:flush
php bin/magento cache:clean
```
## Author

* **Zekinah Lecaros** - *Initial work* - [Zekinah Lecaros](https://github.com/zekinah)

## License

[MIT](http://opensource.org/licenses/MIT)
