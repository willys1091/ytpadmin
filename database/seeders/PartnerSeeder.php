<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\partner;

class PartnerSeeder extends Seeder{
    public function run(){
        partner::create(['img' => '1.png']);
        partner::create(['img' => '2.png']);
        partner::create(['img' => '3.png']);
    }
}
