<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client')->unsigned()->index();
            $table->foreign('client')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('credit')->unsigned()->index();
            $table->foreign('credit')->references('id')->on('credits')->onDelete('cascade')->default();
            $table->date('fromdate');
            $table->date('todate');
            $table->decimal('balance');
            $table->integer('status')->unsigned()->index();
            $table->foreign('status')->references('id')->on('acc_statuses')->onDelete('cascade');
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
        Schema::dropIfExists('accounts');
    }
}
