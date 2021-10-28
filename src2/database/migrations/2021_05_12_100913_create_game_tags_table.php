<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_tags', function (Blueprint $table) {
            $table->id();

            $table->integer('game_id');
            $table->integer('tag_id');

            $table->foreign('game_id')
                ->references('id')
                ->on('games');

            $table->foreign('tag_id')
                ->references('id')
                ->on('tags');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_tags');
    }
}
