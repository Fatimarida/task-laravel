<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductRating;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_ratings')->truncate();
        ProductRating::factory()->count(20)->create();

    }
}
