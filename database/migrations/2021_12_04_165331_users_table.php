<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 128);
            $table->string('lastname', 128);
            $table->string('rut', 24)->unique();
            $table->string('email', 255)->unique();
            $table->string('password');
            $table->enum('role', ["admin","executive"])->default("executive");
            $table->boolean('remenber_me')->default(0);

            $table->timestamps();

            //Eliminar con SoftDelete
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
        Schema::table("users", function ($table) {
            $table->dropSoftDeletes();
        });

        Schema::dropIfExists('users');
    }
}
