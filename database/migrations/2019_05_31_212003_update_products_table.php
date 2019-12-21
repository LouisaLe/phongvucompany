<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProductsTable extends Migration
{

    public function boot()
    {
        Schema::defaultStringLength(191);
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('products')) {
            Schema::table('products', function (Blueprint $table) {
                $table->bigInteger('category_id');
                $table->text('sku');
            });
        } 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
