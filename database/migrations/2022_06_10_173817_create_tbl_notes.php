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
        Schema::create('tbl_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date')->nullable()->useCurrent();
            $table->string('notes', 100)->nullable()->default('text')->comment('Some important notes');
            $table->boolean('is_new_todo')->nullable()->default(false);
            $table->integer('todo_type_id')->unsigned()->nullable()->default(0);
            $table->integer('todo_desc_id')->unsigned()->nullable()->default(0);
            $table->date('todo_due_date')->nullable()->useCurrent();
            $table->string('contact', 100)->nullable()->default('text');
            $table->boolean('task_status')->nullable()->default(false);
            $table->string('task_update', 100)->nullable()->default('text');
            $table->bigInteger('sales_rep')->nullable()->default(0)->comment('user id');
            $table->bigInteger('created_by')->nullable()->default(0)->comment('user id');
            $table->bigInteger('updated_by')->nullable()->default(0)->comment('user id');
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
        Schema::dropIfExists('tbl_notes');
    }
};
