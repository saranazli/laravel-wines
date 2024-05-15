<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wine;


class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_string= file_get_contents('https://api.sampleapis.com/wines/reds');

        $data=json_decode($data_string, true);

        foreach($data as $wine){
           $new_wine= new Wine();
           $new_wine->winery=$wine['winery'];
           $new_wine->wine=$wine['wine'];
           $new_wine->average=$wine['average'];
           $new_wine->reviews=$wine['reviews'];
           $new_wine->location=$wine['location'];
           $new_wine->image=$wine['image'];
           $new_wine->save();
        }
    }
}
