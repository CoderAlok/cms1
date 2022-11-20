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
        Schema::create('tbl_employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->nullable()->default('')->comment('Employee name');
            $table->bigInteger('departmentId')->nullable()->default(0)->comment('PK of department table');
            $table->double('salary', 10, 3)->nullable()->default(0.00)->comment('Employee salary');
            $table->tinyInteger('area_type')->nullable()->default(0)->comment('0: Rural, 1:Urban');
            $table->integer('state_id')->unsigned()->nullable()->default(0)->comment('PK of State table');
            $table->integer('district_id')->unsigned()->nullable()->default(0)->comment('PK of District table');
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
        Schema::dropIfExists('tbl_employees');
    }
};
