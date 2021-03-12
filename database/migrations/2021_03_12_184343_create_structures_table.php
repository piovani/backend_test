<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructuresTable extends Migration
{
    public function up()
    {
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->string("address");
            $table->integer("bedrooms");
            $table->integer("bathrooms");
            $table->integer("total_area");
            $table->boolean("purchased");
            $table->float("value");
            $table->integer("discount");

            $table->unsignedBigInteger("owner_id");
            $table->foreign('owner_id')->references('id')->on('users');

            $table->boolean("expired");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('structures');
    }
}
