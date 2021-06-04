<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
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
        $categories = [
            [
                'name' => 'Chairs',
                'parent_id' => 0,
            ],
            [
                'name' => 'Beds',
                'parent_id' => 0,
            ],
            [
                'name' => 'Accesories',
                'parent_id' => 0,
            ],
            [
                'name' => 'Furniture',
                'parent_id' => 0,
            ],
            [
                'name' => 'Home Deco',
                'parent_id' => 0,
            ],
            [
                'name' => 'Dressings',
                'parent_id' => 0,
            ],
            [
                'name' => 'Tables',
                'parent_id' => 0,
            ],
        ];

        Category::insert($categories);
    }
}
