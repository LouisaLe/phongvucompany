<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fun_facts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('experience')->default(0);
            $table->integer('orders')->default(0);
            $table->integer('customers')->default(0);
            $table->integer('product')->default(0);
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
        Schema::dropIfExists('fun_facts');
    }
}
