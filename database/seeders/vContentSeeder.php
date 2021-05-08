<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class vContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('v_content')->insert([
            'id'=>1,
            'created_by'=>NULL,
            'updated_by'=>NULL,
            'created_at'=>'2020-12-25 23:21:48',
            'updated_at'=>'2020-12-25 23:21:48',
            'judul'=>'sadasd',
            'konten' =>'<p>sadasdas</p>' ,
            'sub_judul' =>'sadasd',
            'permalink' => 'https://google.com/judul-yang-dibuat',
            'image_path' => 'public/files/P8J7hs8DRH6r8jIq3a4msXwssFigmSKbR4kADuWY.png',
            'image_name' => 'Capture.PNG',
            'category_id' => 5,
            'igdb_id' => NULL,
            'published' => 1,
            'publish_at' => Carbon::now(),
            'views' => 0,
            'highlight'=> 1
        ],[
            'id'=>2,
            'created_by'=>NULL,
            'updated_by'=>NULL,
            'created_at'=>'2020-12-25 23:25:34',
            'updated_at'=>'2020-12-28 04:26:46',
            'judul'=>'Rhyuziiiii',
            'konten' =>'<p>saddasasd</p>' ,
            'sub_judul' =>'214521asd',
            'permalink' => 'https://google.com/judul-yang-dibuat',
            'image_path' => 'public/files/dMg09vCKGpDgjbcy7ffP96E51EHpDGcKoM06Yri1.jpg',
            'image_name' => 'arca 3.jpg',
            'category_id' => 2,
            'igdb_id' => NULL,
            'published' => 0,
            'publish_at' => NULL,
            'views' => 0,
            'highlight'=> 0
        ]);
    }
}
