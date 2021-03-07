<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\admin;

class AdminSeeder extends Seeder{
    public function run(){
        admin::create(['email' => 'admin@ytp.com','password' => md5('1'),'name' => 'admin']);
    }
}
