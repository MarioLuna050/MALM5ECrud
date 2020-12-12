<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class insertar_todo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poet')->insert([
            'poet_code'=>1,
            'first_name'=>'Mario',
            'surname'=>'Luna',
            'adress'=>'Chihuahua',
            'postcode'=>'31090',
            'telephone_number'=>'614-555-5555']);

        DB::table('poem')->insert([
            'poem_code'=>11,
            'title'=>'Frio en verano',
            'contents'=>'Drama',
            'poet_code'=>1]);

        DB::table('publicacion')->insert([
            'titles'=>'Frio en verano',
            'publication_code'=>21,
            'price'=>250]);


        DB::table('sale')->insert([
            'sale_code'=>31,
            'sale_date'=> '2008-05-09',
            'amount'=>5,
            'customer_code'=>41]);


        DB::table('customer')->insert([
            'customer_code'=>41,
            'first_name'=>'Raul',
            'surname'=>'Toledo',
            'address'=>'Chihuahua Norte',
            'postcode'=>'32108',
            'telephone_number'=>'614-2521-1155']);

        DB::table('poem_publication')->insert([
            'publication_code'=>21,
            'poem_code'=>1]);

        DB::table('sale_publication')->insert([
            'sale_code'=>31,
            'publication_code'=>21]);





    }
}
