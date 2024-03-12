<?php

namespace ValentinMorice\CurrencyInput;

use Filament\Forms\Components\Field;
use Illuminate\Support\Facades\File;

class CurrencyInput extends Field
{
    protected string $view = 'currency-input::index';

    protected string | \Closure $locale = 'en-US';

    public function locale(string | \Closure $value): static
    {
        $locales = File::json(__DIR__ . '/../resources/json/locales.json');

        $i = 0;

        foreach ($locales as $locale) {
            if ($locale === $value) {
                $i = 1;
            }
        }

        if ($i === 0) {
            return $this;
        }

        $this->locale = $value;

        return $this;
    }

    public function getLocale(): string
    {
        return $this->evaluate($this->locale);
    }
}
