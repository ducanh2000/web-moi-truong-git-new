<?php

use Illuminate\Database\Seeder;


class Library extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('library')->delete();
        DB::table('library')->insert([
        	['id'=>1,'title'=>'xã hội','kind'=>'img','link'=>'anh_3.jpg'],
        	['id'=>2,'title'=>'thế giới','kind'=>'img','link'=>'index_14.jpg'],
        ]);
    }
}
