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
        Schema::create('xml_data', function (Blueprint $table) {
            $table->id();
            $table->string("mark", 50);
            $table->string("model", 50);
            $table->string("generation", 30);
            $table->string("year", 50);
            $table->string("run", 50);
            $table->string("color", 30);
            $table->string("body-type", 30);
            $table->string("engine-type", 30);
            $table->string("transmission", 30);
            $table->string("gear-type", 30);
            $table->string("generation_id", 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xml_data');
    }
};
