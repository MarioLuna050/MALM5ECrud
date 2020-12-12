<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertarusuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('poet')->insert([
           'Usuario'=>'mayito.050',
           'password'=>'freefire',
           'key'=>'183080'
       ]);
        DB::table('poem')->insert([
            'Usuario'=>'mayito.050',
            'password'=>'freefire',
            'key'=>'183080'
        ]);
        DB::table('publicacion')->insert([
            'Usuario'=>'mayito.050',
            'password'=>'freefire',
            'key'=>'183080'
        ]);
        DB::table('sale')->insert([
            'Usuario'=>'mayito.050',
            'password'=>'freefire',
            'key'=>'183080'
        ]);
        DB::table('poem')->insert([
            'Usuario'=>'mayito.050',
            'password'=>'freefire',
            'key'=>'183080'
        ]);



    }
}
