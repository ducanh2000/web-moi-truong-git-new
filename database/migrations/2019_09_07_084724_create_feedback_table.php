<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_customer')->unsigned()->nullable();
            $table->foreign('id_customer')
                  ->references('id')
                  ->on('customer')
                  ->onDelete('set null');
            $table->string('name');
            $table->text('content');
            $table->char('email');
            $table->char('address');
            $table->string('slug');
             $table->date('date');
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
        Schema::dropIfExists('feedback');
    }
}
