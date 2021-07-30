<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->id();
            $table->text('our_services');
            $table->string('our_services_btn');
            $table->string('our_services_img');
            $table->text('about_us');
            $table->string('about_us_btn');
            $table->string('about_us_img');
            $table->string('achievements_name_1');
            $table->integer('achievements_num_1');
            $table->string('achievements_name_2');
            $table->integer('achievements_num_2');
            $table->string('achievements_name_3');
            $table->integer('achievements_num_3');
            $table->string('achievements_name_4')->nullable();
            $table->integer('achievements_num_4')->nullable();
            $table->text('newsletter_desc');
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
        Schema::dropIfExists('landing_pages');
    }
}
