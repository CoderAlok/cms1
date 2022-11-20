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
        Schema::create('tbl_fabricators', function (Blueprint $table) {
            $table->bigIncrements('fabricator_id');
            $table->bigInteger('distributor_id')->comment('Distributor ID');
            $table->string('name', 100)->comment('Fabricator name');
            $table->string('sap_code', 100)->comment('Dealer SAP Code');
            $table->string('username', 100)->comment('username to login');
            $table->string('password', 100)->comment('Password');
            $table->string('location')->nullable()->default('');
            $table->bigInteger('state_id')->default(0)->comment('Respective State ID');
            $table->bigInteger('district_id')->default(0)->comment('Respective District ID');
            $table->string('product')->nullable()->comment('Array of Product ids');
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
        Schema::dropIfExists('tbl_fabricators');
    }
};
