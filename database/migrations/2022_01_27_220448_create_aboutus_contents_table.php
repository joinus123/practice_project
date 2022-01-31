<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus_contents', function (Blueprint $table) {
            $table->id();
            $table->string('aboutus_h1');
            $table->string('aboutus_h2');
            $table->string('aboutus_p1');
            $table->string('aboutus_p2');
            $table->string('aboutus_content_img');
            $table->string('aboutus_slider_img');
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
        Schema::dropIfExists('aboutus_contents');
    }
}
