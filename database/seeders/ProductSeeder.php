<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        DB::table('products')->insert([
            [
                'name' => 'Samsung s21',
                'price' => '15000',
                'description' => 'Smartphone with 6gb RAM and 126gb ROM',
                'category' => 'mobile',
                'gallery' => 'https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2Ftc3VuZyUyMHMyMXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
            ],
            [
                'name' => 'Samsung Smart Tv',
                'price' => '35000',
                'description' => 'Smartphone with 6gb RAM and 126gb ROM',
                'category' => 'tv',
                'gallery' => 'https://images.unsplash.com/photo-1593784991095-a205069470b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dHZ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60'
            ],
            [
                'name' => 'Windows 11',
                'price' => '125000',
                'description' => 'Smartphone with 6gb RAM and 126gb ROM',
                'category' => 'mobile',
                'gallery' => 'https://images.unsplash.com/photo-1601944179066-29786cb9d32a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c21hcnQlMjB0dnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
            ],
            [
                'name' => 'Apple iPhone 14',
                'price' => '15000',
                'description' => 'Smartphone with 6gb RAM and 126gb ROM',
                'category' => 'mobile',
                'gallery' => 'https://images.unsplash.com/photo-1663386170868-680631b3a10a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aXBob25lJTIwMTR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60'
            ]
        ]);
    }
}
