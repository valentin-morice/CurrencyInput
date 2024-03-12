<?php

it('returns a default value if locale is not valid', function () {
    $input = new ValentinMorice\CurrencyInput\CurrencyInput('amount');
    $input->locale('some gibberish');

    expect($input->getLocale())->toBe('en-US');
});
