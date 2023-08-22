# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/thearyanahmed/ppp.svg?style=flat-square)](https://packagist.org/packages/thearyanahmed/ppp)
![GitHub Actions](https://github.com/thearyanahmed/ppp/actions/workflows/main.yml/badge.svg)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require thearyanahmed/ppp
```

## Usage

```php
use Thearyanahmed\Ppp\Request;
$response = (new Request)->fetchPPP('DE');
```
The response can be either `SuccessfulResponse` or `ErrorResponse`. The `SuccessResponse` contains the fields with getter methods. Eg: `pppConversionFactor` can be accessed via `getPppConversionFactor()`. 

Available methods
```php
# SuccessResponse
    public function getCountryCodeAlpha2() : string
    public function getCountryCodeAlpha3() : string
    public function getMainCurrencyName() : string
    public function getMainCurrencySymbol() : string
    public function getPppConversionFactor() : float
    public function getPPP() : float

# ErrorResponse
    public function getMessage() : string
```

If it's not a HTTP 200 request, it'll throw an generic exception.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email thearyanahmed@gmail.com instead of using the issue tracker.

## Credits

-   [Aryan Ahmed](https://github.com/thearyanahmed)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com) by [Beyond Code](http://beyondco.de/).
