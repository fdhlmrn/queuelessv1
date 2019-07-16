<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'product_name' => 'Bekas Pensel',
                    'product_price' => 5,
                    'user_id' => 1,
                ],
                [
                    'product_name' => 'Tissue',
                    'product_price' => 1,
                    'user_id' => 1,
                ],
                [
                    'product_name' => 'Pensel Picit',
                    'product_price' => 4,
                    'user_id' => 2,
                ],
                [
                    'product_name' => 'Liquid Paper',
                    'product_price' => 6,
                    'user_id' => 3,
                ],
            ]
        );
    }
}
