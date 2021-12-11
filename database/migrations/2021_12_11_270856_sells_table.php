<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 128);
            $table->float('price', 16,2);
            $table->string('num_order', 24);
            $table->string('machine_detail', 255)->nullable();
            $table->string('desc', 255)->nullable();
            $table->string('adition', 255)->nullable();
            $table->string('document', 255);

            //Foraneas
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('state_id');
            $table->foreign('state_id')->references('id')->on('sell_states');
            $table->unsignedInteger('machine_id');
            $table->foreign('machine_id')->references('id')->on('machine');
            $table->unsignedInteger('provider_id');
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

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
        //
    }
}
