<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new  \App\Models\Product([
            'name' => 'product #1',
            'detail' => 'product #1 detail'


        ]);
        $product ->save();
        //
    }
}
