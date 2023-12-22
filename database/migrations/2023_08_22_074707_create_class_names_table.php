<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassNamesTable extends Migration
{
    public function up()
    {
        Schema::create('class_names', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->string('class_code')->unique();
            $table->text('class_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('class_names');
    }
}
