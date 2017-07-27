<?php

use Illuminate\Database\Seeder;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
        ['nama'=>'Imam Rizki Julian', 'ttl'=>'2000-07-05', 'alamat'=>'Kp Baru Raya', 'hobi'=>'Editing Video'],
        ['nama'=>'M.Fahmi Nur Aziz', 'ttl'=>'2000-03-13', 'alamat'=>'Kp Sayuran', 'hobi'=>'Balap Motor'],
        ['nama'=>'Arya Iswara', 'ttl'=>'2000-09-15', 'alamat'=>'Kp Bojong', 'hobi'=>'Tidur Siang'],
        ];
        //memasukan data ke database
        DB::table('siswas')->insert($siswas);
    }
}
