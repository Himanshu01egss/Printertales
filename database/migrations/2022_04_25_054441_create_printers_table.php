<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('technology')->nullable();
            $table->string('inktype')->nullable();
            $table->string('supportnum')->nullable();
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->integer('brand_id')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('printers');
    }
}
