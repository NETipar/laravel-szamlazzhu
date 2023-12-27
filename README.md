# An invoice package to manage invoices with Számlázz.hu in Laravel Framework.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/netipar/laravel-szamlazzhu.svg?style=flat-square)](https://packagist.org/packages/netipar/laravel-szamlazzhu)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/netipar/laravel-szamlazzhu/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/netipar/laravel-szamlazzhu/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/netipar/laravel-szamlazzhu/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/netipar/laravel-szamlazzhu/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/netipar/laravel-szamlazzhu.svg?style=flat-square)](https://packagist.org/packages/netipar/laravel-szamlazzhu)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-szamlazzhu.jpg?t=1" width="419px" />](https://netipar.hu/open-source/laravel-szamlazzhu)



## Installation

You can install the package via composer:

```bash
composer require netipar/laravel-szamlazzhu
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-szamlazzhu-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$szamlazz = new Netipar\Szamlazz();
echo $szamlazz->echoPhrase('Hello, Netipar!');
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

- [Tibor Hegedüs](https://github.com/hegedustibor)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
