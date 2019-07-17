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

        DB::table('products')->truncate();

        $products = [
            ['Product 1', 'Đây là cái mô tả của sản phẩm', 5 ,100],
            ['Product 2', 'Đây là cái mô tả của sản phẩm', 6 ,100],
            ['Product 3', 'Đây là cái mô tả của sản phẩm', 3 ,100],
            ['Product 4', 'Đây là cái mô tả của sản phẩm', 6 ,100],
            ['Product 6', 'Đây là cái mô tả của sản phẩm', 2 ,100],
            ['Product 6', 'Đây là cái mô tả của sản phẩm', 4 ,100],
        ];

        foreach ($products as $user) {
            DB::table('products')->insert([
                'name' => $user[0],
                'description' => $user[1],
                'quantity' => $user[2],
                'price' => $user[3]
            ]);
        }


    }
}
