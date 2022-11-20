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
        Schema::create('tbl_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->nullable()->comment('Project name');
            $table->string('type', 10)->nullable()->comment('Project type');
            $table->bigInteger('created_by')->default(0)->comment('PK of User table');
            $table->bigInteger('updated_by')->default(0)->comment('PK of User table');
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
        Schema::dropIfExists('tbl_projects');
    }
};
