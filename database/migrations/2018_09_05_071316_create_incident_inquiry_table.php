<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentInquiryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incident_inquiry', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('incident_id')->unsigned();
            $table->foreign('incident_id')->references('id')->on('incidents')->onDelete('cascade');

            $table->integer('inquiry_id')->unsigned();
            $table->foreign('inquiry_id')->references('id')->on('inquiries')->onDelete('cascade');

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
        Schema::dropIfExists('incident_inquiry');
    }
}
