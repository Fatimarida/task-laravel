<?php

namespace Database\Seeders;

use App\Models\ProductSize;
use Database\Factories\ProductSizeFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sizes')->truncate();
        ProductSize::factory()->count(5)->create();
    }
}
