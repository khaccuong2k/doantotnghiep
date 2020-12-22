<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name')->nullable();
            $table->string('img')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('email')->unique();
            $table->string('qty_buy')->nullable();
            $table->float('total_money')->nullable();
            $table->tinyInteger('type_customer')->nullable();
            $table->string('phone')->nullable();
            $table->tinyInteger('role')->default(2);
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
        Schema::dropIfExists('users');
    }
}
