<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('suport', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('id_feedback')->unsigned()->nullable();
                $table->foreign('id_feedback')
                ->references('id')
                ->on('feedback')
                ->onDelete('set null');
                $table->string('name');
                $table->text('content');
                $table->string('slug');
                $table->tinyInteger('status')->default(1);
                $table->timestamps();

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suport');
    }
}
