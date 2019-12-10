<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender')->unsigned()->index();
            $table->foreign('sender')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('receiver')->unsigned()->index();
            $table->foreign('receiver')->references('id')->on('clients')->onDelete('cascade');
            $table->date('date');
            $table->decimal('amount');
            $table->integer('status')->unsigned()->index();
            $table->foreign('status')->references('id')->on('pay_statuses')->onDelete('cascade');
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
        Schema::dropIfExists('payments');
    }
}
