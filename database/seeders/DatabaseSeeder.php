<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Size;
use Database\Factories\DepartmentFactory;
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
        $this->call([
            AdminsTableseeder::class
        ]);

        $children = Department::factory()->create([
            'name_ar' => 'children',
            'name_en' => 'children',
            'photo_g' => 'uploads/group/3.jpg'
        ]);

        $girls = Department::factory()->create([
            'name_ar' => 'girls',
            'name_en' => 'girls',
            'photo_g' => 'uploads/group/00.jpg'
        ]);

        $departments = collect([$girls, $children]);

        $product_types_1 = ProductType::factory(5)->create([
            'department_id' => 1,
        ]);

        $product_types_2 = ProductType::factory(5)->create([
            'department_id' => 2,
        ]);

        $product_types = $product_types_1->merge($product_types_2);

        $products = Product::factory(10)->create([
            'product_type_id' => $product_types->random()->id
        ]);

        for ($i=1; $i <= 10; $i++) { 
            for ($j=1; $j <= 10; $j++) { 
                Size::factory()->create([
                    'product_id' => $i,
                    'size_number' => $j
                ]);
            }
        }
    }
}
