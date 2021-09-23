<?php

namespace Database\Seeders;

use App\Models\ProductRating;
use App\Models\ProductReview;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_reviews')->truncate();
        ProductReview::factory()->count(20)->create();
    }
}
