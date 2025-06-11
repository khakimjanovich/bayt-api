# Bayt API documentation client for laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/khakimjanovich/bayt-api.svg?style=flat-square)](https://packagist.org/packages/khakimjanovich/bayt-api)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/khakimjanovich/bayt-api/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/khakimjanovich/bayt-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/khakimjanovich/bayt-api/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/khakimjanovich/bayt-api/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/khakimjanovich/bayt-api.svg?style=flat-square)](https://packagist.org/packages/khakimjanovich/bayt-api)

masjid.uz uchun laravel server klient, oz moz lekin soz [doc](https://api.masjid.uz/docs)ini bu yerdan ko'rsangiz bo'ladi

## Support us

[<img src="https://masjid.uz/templates/tx_sportz/images/blue/logo-big.png" width="419px" />](https://spatie.be/github-ad-click/bayt-api)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require khakimjanovich/bayt-api
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="bayt-api-config"
```

This is the contents of the published config file:

```php
return [
    'base_url' => env('BAYT_BASE_URL')
];
```

## Usage

```php
$bayt = new Khakimjanovich\Bayt();
echo $bayt->mosques()->first()->lattitude;
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Yunusali Abduraxmanov](https://github.com/khakimjanovich)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
