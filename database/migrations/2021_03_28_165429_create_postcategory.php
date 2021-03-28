<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostcategory extends Migration{
    public function up(){
        Schema::create('postcategory', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('postcategory');
    }
}
