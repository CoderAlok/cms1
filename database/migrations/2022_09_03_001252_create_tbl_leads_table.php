<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\SoftDeletes;
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
        Schema::create('tbl_leads', function (Blueprint $table) {
            $table->bigIncrements('lead_id');
            $table->string('name', 100)->nullable()->comment('Leads name');
            $table->string('location', 100)->nullable()->comment('Location address');
            $table->bigInteger('state_id')->nullable()->default(0);
            $table->bigInteger('district_id')->nullable()->default(0);
            $table->bigInteger('created_by')->nullable()->default(0);
            $table->bigInteger('updated_by')->nullable()->default(0);
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
        Schema::dropIfExists('tbl_leads');
    }
};
