<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDutiesTable extends Migration
{
    public function up()
    {
        Schema::create('duties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('item_level');
            $table->string('difficulty');
            $table->enum('status', ['Passed', 'In Progress']);
            $table->string('thumbnail');
            $table->string('hover_image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('duties');
    }
}