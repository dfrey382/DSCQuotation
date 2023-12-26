# This is my package dscquotation

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dsc/dscquotation.svg?style=flat-square)](https://packagist.org/packages/dsc/dscquotation)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/dsc/dscquotation/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/dsc/dscquotation/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/dsc/dscquotation/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/dsc/dscquotation/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/dsc/dscquotation.svg?style=flat-square)](https://packagist.org/packages/dsc/dscquotation)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require dsc/dscquotation
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="dscquotation-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="dscquotation-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="dscquotation-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$dSCQuotation = new Dsc\DSCQuotation();
echo $dSCQuotation->echoPhrase('Hello, Dsc!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [DSC](https://github.com/dfrey382)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
