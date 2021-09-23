<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $categories = ['bed_rooms' => 'fas fa-camera', 'living_rooms' => 'fas fa-camera', 'DSLR_cameras' => 'fas fa-camera', 'appliances' => 'fas fa-camera', 'storage' => 'fas fa-camera', 'packages' => 'fas fa-camera'];
        foreach ($categories as $category => $icon) {
            (new Category)->insert([
                'name' => $category,
                'icon' => $icon,
                'created_at'=>Date::now(),
            ]);
        }

    }
}
