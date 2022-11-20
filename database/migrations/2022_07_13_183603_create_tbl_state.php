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
        Schema::create('tbl_state', function (Blueprint $table) {
            $table->bigIncrements('state_id');
            $table->string('name', 100)->nullable()->default('')->comment('State name');
            $table->bigInteger('created_by')->nullable()->default(0)->comment('PK of user table');
            $table->bigInteger('updated_by')->nullable()->default(0)->comment('PK of user table');
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
        Schema::dropIfExists('tbl_state');
    }
};
