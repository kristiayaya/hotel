<?php

use App\Kamar;
use Illuminate\Database\Seeder;

class KamarSeeder extends Seeder
{
    
    public function run()
    {
        kamar::create([
            'tipe_kamar' => 'Superior',
            'jml_kamar' => 0,
        ]);

        kamar::create([
            'tipe_kamar' => 'Deluxe',
            'jml_kamar' => 0,
        ]);
    }
}
