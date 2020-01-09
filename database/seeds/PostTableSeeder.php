<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [ ['title'=>'Tips Cepat Nikah', 'content'=>'lorem ipsum'],
                   ['title'=>'Haruskah Menunda Nikah?', 'content'=>'lorem ipsum']
                 
                 ];
        // masukkan data ke database 
        DB::table('post')->insert($posts); 
    }
}
