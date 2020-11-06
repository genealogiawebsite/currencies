<?php

namespace LaravelEnso\Currencies\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use LaravelEnso\Currencies\Models\Currency;

class CurrencySeeder extends Seeder
{
    private const Currencies = [
        ['code' => 'USD', 'name' => 'US Dollar', 'symbol' => '$', 'is_default' => true],
        ['code' => 'EUR', 'name' => 'Euro', 'symbol' => '€', 'is_default' => false],
        ['code' => 'GBP', 'name' => 'GB Pound', 'symbol' => '£', 'is_default' => false],
        ['code' => 'RON', 'name' => 'Romanian Leu', 'symbol' => 'lei', 'is_default' => false],
        ['code' => 'AUD', 'name' => 'Australian dollar', 'symbol' => '$', 'is_default' => false],
        ['code' => 'CZK', 'name' => 'Czech koruna', 'symbol' => 'Kč', 'is_default' => false],
        ['code' => 'DKK', 'name' => 'Danish krone', 'symbol' => 'kr', 'is_default' => false],
        ['code' => 'HUF', 'name' => 'forint', 'symbol' => 'Ft', 'is_default' => false],
        ['code' => 'HRK', 'name' => 'kuna', 'symbol' => 'kn', 'is_default' => false],
        ['code' => 'ILS', 'name' => 'shekel', 'symbol' => '₪', 'is_default' => false],
        ['code' => 'MYR', 'name' => 'ringgit', 'symbol' => 'RM', 'is_default' => false],
        ['code' => 'NZD', 'name' => 'New Zealand dollar', 'symbol' => '$', 'is_default' => false],
        ['code' => 'NOK', 'name' => 'Norwegian krone', 'symbol' => 'kr', 'is_default' => false],
        ['code' => 'PLN', 'name' => 'zloty', 'symbol' => 'zł', 'is_default' => false],
        ['code' => 'RSD', 'name' => 'Serbian dinar', 'symbol' => '', 'is_default' => false],
        ['code' => 'SGD', 'name' => 'Singapore dollar', 'symbol' => '$', 'is_default' => false],
        ['code' => 'SEK', 'name' => 'krona', 'symbol' => 'kr', 'is_default' => false],
        ['code' => 'CHF', 'name' => 'Swiss franc', 'symbol' => 'CHF', 'is_default' => false],
        ['code' => 'UAH', 'name' => 'hryvnia', 'symbol' => '₴', 'is_default' => false],
        ['code' => 'AED', 'name' => 'UAE dirham', 'symbol' => 'AED', 'is_default' => false],
    ];

    public function run()
    {
        (new Collection(self::Currencies))
            ->when(! App::environment('testing'), fn ($currencies) => $currencies
                ->each(fn ($currency) => Currency::create($currency)));
    }
}
