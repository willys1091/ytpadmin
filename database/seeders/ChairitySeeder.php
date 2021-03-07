<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\chairity;

class ChairitySeeder extends Seeder{
    public function run(){
        chairity::create(['name' => 'Feed and Learning']);
        chairity::create(['name' => 'Sekolah Berasrama']);
        chairity::create(['name' => 'Rumah Belajar']);
        chairity::create(['name' => 'Prison School']);
        chairity::create(['name' => 'Sponsor Guru Pedalaman']);
        chairity::create(['name' => 'Pelatihan dan Pengembangan']);
        chairity::create(['name' => 'Mobile Clinic']);
        chairity::create(['name' => 'Anak-anak pedalaman']);
    }
}
