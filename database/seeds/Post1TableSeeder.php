<?php

use Illuminate\Database\Seeder;

class Post1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post1 = [
        ['judul'=>'Tips  Langgeng Nikah', 'content'=>'lorem ipsum'],
        ['judul'=>'Haruskah Menunda atau mempercepat Nikah?', 'content'=>'lorem ipsum'],
        ['judul'=>'Membangun Visi dan Misi Keluarga', 'content'=>'lorem ipsum']

        ];
        DB::table('Post1')->insert($post1);
    }
}
