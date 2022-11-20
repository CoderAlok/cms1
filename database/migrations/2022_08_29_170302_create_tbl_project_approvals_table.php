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
        Schema::create('tbl_project_approvals', function (Blueprint $table) {
            $table->bigIncrements('map_id');
            $table->bigInteger('project_id')->comment('PK of project table');
            $table->string('type', 10)->comment('Project type of project table');
            $table->boolean('account_state')->default(false)->comment('0:leads, 1:Accounts');
            $table->bigInteger('account_id')->default(1)->comment('PK of respective account tables like distributor, dealer, subdealer, etc');
            $table->string('account_type', 20)->comment('Account type from account table');
            $table->boolean('is_mapped')->default(false)->comment('0:mapped, 1:not mapped');
            $table->bigInteger('created_by')->default(0)->comment('PK of user table');
            $table->bigInteger('updated_by')->default(0)->comment('PK of user table');
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
        Schema::dropIfExists('tbl_project_approvals');
    }
};
