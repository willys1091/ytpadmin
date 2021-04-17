<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePost extends Migration{
    public function up(){
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('modul');
            $table->string('url')->nullable();
            $table->string('img')->nullable();
            $table->string('img_position')->nullable();
            $table->text('content')->nullable();
            $table->string('parent')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('post');
    }
}
