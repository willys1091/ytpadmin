<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlc extends Migration{
    public function up(){
        Schema::create('flc', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('flc');
    }
}
