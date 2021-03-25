<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(){
        $this->call(AdminSeeder::class);
        $this->call(BulletinSeeder::class);
        $this->call(ChairitySeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(PostCategorySeeder::class);
    }
}
