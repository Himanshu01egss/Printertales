<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Brands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('headquarter')->nullable();
            $table->string('founder')->nullable();
            $table->string('established')->nullable();
            $table->string('website')->nullable();
            $table->string('people')->nullable();
            $table->boolean('status')->default(0);
            $table->string('metatitle')->nullable();
            $table->string('metadescription')->nullable();
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
        Schema::dropIfExists('brands');
    }
}
