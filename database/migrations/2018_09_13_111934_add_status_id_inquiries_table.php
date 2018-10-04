<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusIdInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inquiries', function (Blueprint $table) {
            //
            $table->integer('status_id')->unsigned()->default(1);
            $table->foreign('status_id')->references('id')->on('inquiry_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inquiries', function (Blueprint $table) {
            //
            $table->dropForeign('inquiries_status_id_foreign');
            $table->dropColumn('status_id');
        });
    }
}
