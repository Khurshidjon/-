<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('worker_name_uz');
            $table->string('worker_name_en');
            $table->string('worker_name_ru');
            $table->string('worker_name_cyrl');
            $table->text('commitment_uz')->nullable();
            $table->text('commitment_en')->nullable();
            $table->text('commitment_ru')->nullable();
            $table->text('commitment_cyrl')->nullable();
            $table->text('biography_uz')->nullable();
            $table->text('biography_rn')->nullable();
            $table->text('biography_ru')->nullable();
            $table->text('biography_cyrl')->nullable();
            $table->string('work_address_uz')->nullable();
            $table->string('work_address_en')->nullable();
            $table->string('work_address_ru')->nullable();
            $table->string('work_address_cyrl')->nullable();
            $table->string('worker_photo')->nullable();
            $table->string('phone_number');
            $table->string('fax_number')->nullable();
            $table->unsignedInteger('organ_id');
            $table->unsignedInteger('rank_id');
            $table->unsignedInteger('worker_creator_organ');
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
        Schema::dropIfExists('workers');
    }
}
