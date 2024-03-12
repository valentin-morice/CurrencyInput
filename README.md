# A Filament port Of MaryUI's Currency Input

[![Latest Version on Packagist](https://img.shields.io/packagist/v/valentin-morice/currencyinput.svg?style=flat-square)](https://packagist.org/packages/valentin-morice/currencyinput)



A [Filament](https://filamentphp.com) port of [MaryUI](https://mary-ui.com/)'s Currency Input.

## Installation

You can install the package via composer:

```bash
composer require valentin-morice/currencyinput
```

## Usage

The `CurrencyInput` class provides all the methods you would expect from a standard Filament component, with the addition of a `locale` function, which formats the input properly. Once the input is blurred, the **unmasked** value is passed on to Livewire. The default formatting is `en-US`.

```php
public static function form(Form $form): Form
    {
        return $form
            ->schema([
                CurrencyInput::make('amount')
                    ->locale('fr-FR'),
            ]);
    }
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
