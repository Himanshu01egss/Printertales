<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandissuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brandissues', function (Blueprint $table) {
            $table->id();
            $table->string('name',600)->nullable();
            $table->string('slug',600)->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('description2')->nullable();
            $table->string('metatitle')->nullable();
            $table->text('metadescription')->nullable();
            $table->string('metakeywords')->nullable();
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
        Schema::dropIfExists('brandissues');
    }
}
