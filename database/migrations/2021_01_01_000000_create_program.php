<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgram extends Migration{
    public function up(){
        Schema::create('program', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc');
            $table->string('img');
            $table->boolean('active')->default('1');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('program');
    }
}
