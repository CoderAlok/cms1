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
        Schema::table('tbl_district', function (Blueprint $table) {
            $table->bigInteger('state_id')->nullable()->comment('PK of state table')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_district', function (Blueprint $table) {
            $table->dropColumn('state_id');
        });
    }
};
