<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa = [
        ['nama'=>'Silvani', 'kelas'=>'XII RPL 3' , 'sekolah'=>'SMK Assalaam'],
        ['nama'=>'Risa', 'kelas'=>'XII RPL 1' , 'sekolah'=>'SMK Assalaam'],
        ['nama'=>'Sulis', 'kelas'=>'XII RPL 2' , 'sekolah'=>'SMK Assalaam'],
        ['nama'=>'Ana', 'kelas'=>'XII TKR 2' , 'sekolah'=>'SMK Assalaam'],
        ['nama'=>'Nirmala', 'kelas'=>'XII TKR 3' , 'sekolah'=>'SMK Assalaam']


        ];
        DB::table('Siswa')->insert($siswa);
    }
}
