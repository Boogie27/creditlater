<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProductTableSeeder::class,
            CategoryTableSeeder::class,
            SliderTableSeeder::class,
            BrandTableSeeder::class,
            ProductSoldTableSeeder::class,
            PaymentMethodtableSeeder::class,
            CategoryBrandTableSeeder::class,
            RatingTableSeeder::class,
            PriceRangeTableSeeder::class,
        ]);
        
    }
}
