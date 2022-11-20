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
        Schema::create('tbl_account_approvals', function (Blueprint $table) {
            $table->bigIncrements('approval_id');
            $table->tinyInteger('account_state')->comment('0 leads 1 accounts');
            $table->bigInteger('account_type_id')->comment('Account type id');
            $table->bigInteger('account_id')->comment('Account id');
            $table->boolean('is_mapped')->default(0)->comment('0 not mapped 1 mapped');
            $table->bigInteger('created_by')->comment('PK of user table');
            $table->bigInteger('updated_by')->comment('PK of user table');
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
        Schema::dropIfExists('tbl_account_approvals');
    }
};
