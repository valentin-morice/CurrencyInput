# A Filament port Of MaryUI's Currency Input

[![Latest Version on Packagist](https://img.shields.io/packagist/v/valentin-morice/currencyinput.svg?style=flat-square)](https://packagist.org/packages/valentin-morice/currency-input)

![Screencast from 2024-03-12 22-50-17](https://github.com/valentin-morice/CurrencyInput/assets/100000204/1f88d2e0-d245-4c23-bf06-ef2fd15814ca)


A [Filament](https://filamentphp.com) port of [MaryUI](https://mary-ui.com/)'s Currency Input.

## Installation

You can install the package via composer:

```bash
composer require valentin-morice/currency-input
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
