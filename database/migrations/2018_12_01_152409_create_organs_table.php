<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organ_name_uz');
            $table->string('organ_name_en');
            $table->string('organ_name_ru');
            $table->string('organ_name_cyrl');
            $table->string('organ_photo');
            $table->string('address_uz');
            $table->string('address_en');
            $table->string('address_ru');
            $table->string('address_cyrl');
            $table->string('ghazna_name_uz');
            $table->string('ghazna_name_en');
            $table->string('ghazna_name_ru');
            $table->string('ghazna_name_cyrl');
            $table->string('bank_name_uz');
            $table->string('bank_name_en');
            $table->string('bank_name_ru');
            $table->string('bank_name_cyrl');
            $table->string('phone_number');
            $table->string('fax_number');
            $table->string('email');
            $table->string('SH_X_V');
            $table->string('stir_number');
            $table->string('x_r');
            $table->unsignedInteger('banks_code');
            $table->string('exat_standart_uz');
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
        Schema::dropIfExists('organs');
    }
}
