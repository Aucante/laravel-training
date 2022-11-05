<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Sport', 'IT', 'Sciences'];
        $faker = Factory::create();

        for ($i = 0, $iMax = count($categories); $i < $iMax; $i++) {
            Category::create([
                'label' => $categories[$i]
            ]);
        }
    }
}
