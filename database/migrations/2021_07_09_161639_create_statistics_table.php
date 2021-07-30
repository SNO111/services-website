<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->integer('projects')->default(1);
            $table->string('projects_desc');
            $table->integer('hours')->default(1);
            $table->string('hours_desc');
            $table->integer('clients')->default(1);
            $table->string('clients_desc');
            $table->integer('ui_ux_design'->default(1));
            $table->string('ui_ux_design_desc');
            $table->integer('web_design')->default(1);
            $table->string('web_design_desc');
            $table->integer('app_design')->default(1);
            $table->string('app_design_desc');
            $table->integer('support')->default(1);
            $table->string('support_desc');
            $table->integer('blog_posts')->default(1);
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
        Schema::dropIfExists('statistics');
    }
}
