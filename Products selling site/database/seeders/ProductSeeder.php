<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  
        DB::table('Products')->insert([[
            'name'=>'oppo mobile',
            "price"=>"3000",
            "catagory"=>"mobile",
            "description"=>"smart phone wirh 4g catetagoris",
            
            "gallery"=>"https://allsharq.com/wp-content/uploads/2021/01/Oppo-Reno-4.jpg",
        ],

        [
            'name'=>'LED TV',
            "price"=>"20000",
            "catagory"=>"TV",
            "description"=>"soo good for new generatin",
            
            "gallery"=>"https://www.lg.com/in/images/plp-b2c/in-ledtvs-hero-1-m.jpg",
        ],

        [
            'name'=>'belander',
            "price"=>"2000",
            "catagory"=>"Mixture",
            "description"=>"good for new generatin",
            
            "gallery"=>"https://www.pngall.com/wp-content/uploads/7/Blender-PNG-File-Download-Free.png",
        ],

    
        ]
    
    );     
}
    }

