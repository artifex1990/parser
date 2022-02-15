<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkticomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akticoms', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->mediumText('name');
            $table->string('level_1')->nullable();
            $table->string('level_2')->nullable();
            $table->string('level_3')->nullable();
            $table->float('price');
            $table->float('price_sp');
            $table->integer('count');
            $table->integer('field_properties')->nullable();
            $table->string('joint_shopping')->nullable();
            $table->string('unit_measure')->nullable();
            $table->mediumText('image')->nullable();
            $table->boolean('view_main');
            $table->longText('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akticoms');
    }
}
