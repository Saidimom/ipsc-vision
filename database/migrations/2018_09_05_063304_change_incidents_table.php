<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incidents', function (Blueprint $table) {
            //
            $table->integer('user_id')->unsigned()->default(1);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('cms_id')->unsigned()->nullable()->default(null);
            $table->foreign('cms_id')->references('id')->on('c_m_s')->onDelete('cascade');

            $table->integer('registrar_id')->unsigned()->nullable()->default(null);
            $table->foreign('registrar_id')->references('id')->on('registrars')->onDelete('cascade');

            $table->integer('type_id')->unsigned()->nullable()->default(null);
            $table->foreign('type_id')->references('id')->on('incident_types')->onDelete('cascade');

            $table->dateTime('detection_at')->nullable()->default(null);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incidents', function (Blueprint $table) {
            //
            $table->dropForeign('incidents_user_id_foreign');
            $table->dropForeign('incidents_cms_id_foreign');
            $table->dropForeign('incidents_registrar_id_foreign');
            $table->dropForeign('incidents_type_id_foreign');

            $table->dropColumn('user_id');
            $table->dropColumn('cms_id');
            $table->dropColumn('registrar_id');
            $table->dropColumn('type_id');
            $table->dropColumn('detection_at');


        });
    }
}
