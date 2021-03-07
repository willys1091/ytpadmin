<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulletin extends Migration{
    public function up(){
        Schema::create('bulletin', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('url');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('bulletin');
    }
}
