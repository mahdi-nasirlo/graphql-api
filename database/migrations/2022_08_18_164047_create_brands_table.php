<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string("name");
            $table->string("cover")->nullable();
            $table->string("logo");
            // $table->string("catalog")->nullable();
            // $table->string("priceList")->nullable();
            // $table->string("installationGuide")->nullable();
            $table->text("info")->nullable();
            $table->timestamps();
        });


        Schema::create('brandables', function (Blueprint $table) {
            $table->unsignedBigInteger("brand_id");
            $table->foreign("brand_id")->references("id")->on("brands");
            $table->morphs("brandable");
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
};
