<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSitePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_site_pages', function (Blueprint $table) {
            $table->id();
            $table->string('header_logo');
            $table->string('slider_image');
            $table->string('slider_p');
            $table->string('slider_h');
            $table->string('service_h');
            $table->string('donation_h1');
            $table->string('donation_h2');
            $table->string('footer_logo');
            $table->string('footer_logo_h');
            $table->string('copyright_text');
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
        Schema::dropIfExists('home_site_pages');
    }
}
