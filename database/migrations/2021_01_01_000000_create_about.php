<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbout extends Migration{
    public function up(){
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('about');
    }
}
