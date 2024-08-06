# This is my package clock-work-origin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abdalhalem-alfakhrany/clock-work-origin.svg?style=flat-square)](https://packagist.org/packages/abdalhalem-alfakhrany/clock-work-origin)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/abdalhalem-alfakhrany/clock-work-origin/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/abdalhalem-alfakhrany/clock-work-origin/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/abdalhalem-alfakhrany/clock-work-origin/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/abdalhalem-alfakhrany/clock-work-origin/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/abdalhalem-alfakhrany/clock-work-origin.svg?style=flat-square)](https://packagist.org/packages/abdalhalem-alfakhrany/clock-work-origin)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require abdalhalem-alfakhrany/clock-work-origin
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="clock-work-origin-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="clock-work-origin-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="clock-work-origin-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$clockWorkOrigin = new Abdalhalemalfakhrany\ClockWorkOrigin();
echo $clockWorkOrigin->echoPhrase('Hello, Abdalhalemalfakhrany!');
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

- [Abdalhalem](https://github.com/abdalhalem-alfakhrany)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
