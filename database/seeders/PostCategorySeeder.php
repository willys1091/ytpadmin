<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\postcategory;

class PostCategorySeeder extends Seeder{
    public function run(){
        postcategory::create(['name' => 'banner']);
        postcategory::create(['name' => 'about']);
        postcategory::create(['name' => 'maps']);
        postcategory::create(['name' => 'flc']);
        postcategory::create(['name' => 'event']);
        postcategory::create(['name' => 'program']);
        postcategory::create(['name' => 'project']);
        postcategory::create(['name' => 'team']);
        postcategory::create(['name' => 'partner']);
    }
}
