<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropProjectTextsTable extends Migration
{
    public function up()
    {
        Schema::connection('portfolio')->dropIfExists('project_texts');
    }

    public function down()
    {
        Schema::connection('portfolio')->create('project_texts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id');
            $table->string('format');
            $table->integer('order');
            $table->longText('text');
            $table->timestamps();
        });
    }
}
