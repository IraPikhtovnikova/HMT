<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutopaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autopayments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender')->unsigned()->index();
            $table->foreign('sender')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('receiver')->unsigned()->index();
            $table->foreign('receiver')->references('id')->on('clients')->onDelete('cascade');
            $table->string('everywhat');
            $table->integer('everynumber');
            $table->integer('frequency');
            $table->decimal('amount');
            $table->text('comment')->default();
            $table->boolean('isactive');
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
        Schema::dropIfExists('autopayments');
    }
}
