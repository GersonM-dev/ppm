<?php

namespace Database\Seeders;

use App\Models\Pemesanan;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class PemesananSeeder extends Seeder
{
    public function run(): void
    {
        $faker = FakerFactory::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            Pemesanan::create([
                'order_date' => $faker->dateTimeBetween('-1 years', 'now')->format('Y-m-d'),
                'address' => str_replace("\n", ', ', $faker->address()),
                'nama' => $faker->name(),
                'total_amount' => $faker->numberBetween(150000, 7500000),
            ]);
        }
    }
}
