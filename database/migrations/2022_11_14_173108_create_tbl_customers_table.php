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
        Schema::create('tbl_customers', function (Blueprint $table) {
            $table->bigIncrements('customer_id')->index();
            $table->string('name', 100)->nullable()->default('')->comment('Customer name ');
            $table->integer('age')->unsigned()->nullable()->default(0)->comment('Customers age');
            $table->text('address')->nullable()->comment('Customers address');
            $table->date('dob')->nullable()->comment('Customers date of birth');
            $table->string('email', 100)->nullable()->default('')->comment('Customers email address');
            $table->bigInteger('created_by')->nullable()->default(0)->comment('id of user table');
            $table->bigInteger('updated_by')->nullable()->default(0)->comment('id of user table');
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
        Schema::dropIfExists('tbl_customers');
    }
};
