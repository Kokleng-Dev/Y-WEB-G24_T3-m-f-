<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Item 1',
                'price' => 23.0,
                'note' => '',
                'created_at' => '2024-08-01 18:56:09',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Item 2',
                'price' => 25.0,
                'note' => '',
                'created_at' => '2024-08-01 18:56:35',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Item 3',
                'price' => 15.0,
                'note' => '',
                'created_at' => '2024-08-01 18:56:35',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Item 4',
                'price' => 13.0,
                'note' => '',
                'created_at' => '2024-08-01 18:56:35',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}