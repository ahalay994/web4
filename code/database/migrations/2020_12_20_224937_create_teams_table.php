<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->tinyInteger('type_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->string('old');
            $table->boolean('sterilization_castration')->default(0);
            $table->boolean('is_home')->default(0);
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
        Schema::dropIfExists('teams');
    }
}
