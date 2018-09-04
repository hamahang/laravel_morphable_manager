<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMorphableManager extends Migration
{
    public function up()
    {
        Schema::create('lmm_morphable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pck_name', 255)->nullable()->default(null);;
            $table->string('dev_name', 255)->nullable()->default(null);;
            $table->string('name', 255)->nullable()->default(null);;
            $table->string('model_name', 255)->nullable()->default(null);;
            $table->string('target_column_name', 255)->nullable()->default(null);;
            $table->string('target_column_alias', 255)->nullable()->default(null);;
            $table->integer('created_by')->unsigned()->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lmm_morphable');
    }
}
