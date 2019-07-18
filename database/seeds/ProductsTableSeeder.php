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
            ['Product 2', 'Đây là cái mô tả của sản phẩm', 6 ,200],
            ['Product 3', 'Đây là cái mô tả của sản phẩm', 3 ,300],
            ['Product 4', 'Đây là cái mô tả của sản phẩm', 6 ,500],
            ['Product 6', 'Đây là cái mô tả của sản phẩm', 2 ,2200],
            ['Product 7', 'Đây là cái mô tả của sản phẩm', 4 ,300],
            ['Product 8', 'Đây là cái mô tả của sản phẩm', 4 ,500],
            ['Product 9', 'Đây là cái mô tả của sản phẩm', 4 ,700],
            ['Product 10', 'Đây là cái mô tả của sản phẩm', 4 ,1000],
            ['Product 11', 'Đây là cái mô tả của sản phẩm', 4 ,2000],
            ['Product 12', 'Đây là cái mô tả của sản phẩm', 4 ,300],
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
