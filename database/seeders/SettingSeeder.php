<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\settings;

class SettingSeeder extends Seeder{
    public function run(){
        settings::create(['name' => 'docs','value' => 'http://doc.ytp.test']);
        
    }
}
