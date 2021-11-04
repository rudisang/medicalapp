<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intern_application_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('next_of_kin_name');
            $table->string('next_of_kin_surname');
            $table->string('next_of_kin_mobile_no');
            $table->string('next_of_kin_address');
            $table->string('relation_to_kin');
            $table->string('level');
            $table->string('prog_name');
            $table->string('major');
            $table->string('institution');
            $table->date('date_of_completion');
            $table->string('disability');
            $table->string('exemption_cert')->nullable();
            $table->string('letter_auth')->nullable();
            $table->string('radp');
            $table->string('village')->nullable();
            $table->string('field_of_interest');
            $table->string('rel_to_area_of_study');
            $table->text('reason');
            $table->string('pref_location');
            $table->text('competencies');
            $table->text('attachments');
            $table->integer('application_status');
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
        Schema::dropIfExists('intern_application_forms');
    }
}
