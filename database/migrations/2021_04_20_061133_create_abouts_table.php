<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->longText('story_description');
            $table->string('title_1');
            $table->text('icon_1');
            $table->longText('short_text_1');
            $table->string('title_2');
            $table->text('icon_2');
            $table->longText('short_text_2');
            $table->string('title_3');
            $table->text('icon_3');
            $table->longText('short_text_3');
            $table->string('title_4');
            $table->text('icon_4');
            $table->longText('short_text_4');
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
        Schema::dropIfExists('abouts');
    }
}
