<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
            <x-filament::input.wrapper x-data="{ state: $wire.entangle('{{ $getStatePath() }}') }" x-init="
                    input = document.getElementById('amount')

                    masked = Currency.masking(state, {
                        locales: '{{ $getLocale() }}'
                    })

                    mask = new Currency(input, {
                    maskOpts: {
                        locales: '{{ $getLocale() }}'
                        }
                    })
            ">
                    <x-filament::input
                        type="text"
                        id="amount"
                        placeholder="0.00"
                        x-model="masked"
                        x-on:blur="state = Currency.getUnmasked()"
                    />
            </x-filament::input.wrapper>
</x-dynamic-component>
