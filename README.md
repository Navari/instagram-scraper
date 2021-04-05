# Instagram Account Scrapper

[![Packagist Version](https://img.shields.io/packagist/v/navari/instagram-scraper.svg?style=popout&color=aa007f)](https://packagist.org/packages/navari/instagram-scraper)  ![License](https://img.shields.io/packagist/l/navari/instagram-scraper.svg?style=popout&color=ff00bf)


PHP library to scrape instagram account data.

## Installation
```shell
composer require navari/instagram-scraper
```

## Example
```php
// Retrieving subcription data

$instagram = new \Navari\InstagramScrapper\Instagram();
$instagram = $instagram->getAccount('neymarjr');
```
Result:
```php
\Navari\InstagramScrapper\Models\Account::class
```

## Changelog

Changes are documented in the [releases page](https://github.com/navari/instagram-scraper/releases).

## License

The library is open-sourced software licensed under the [MIT License](https://github.com/navari/instagram-scraper/blob/main/LICENSE).
