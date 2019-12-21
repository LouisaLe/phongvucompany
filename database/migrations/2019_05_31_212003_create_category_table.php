<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
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
        if(!Schema::hasTable('category')) {
            Schema::create('category', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('parent_id');
                $table->boolean('status');
                $table->text("name")->nullable(false);
                $table->text("image")->nullable();
                $table->text("meta_title")->nullable();
                $table->text("meta_keyword")->nullable();
                $table->text("description")->nullable();
                $table->text("url_key")->nullable();
                $table->timestamps();
            });
        } else {
            Schema::table('category', function (Blueprint $table) {
                $table->text('parent_id', 50)->nullable()->change();
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
        Schema::dropIfExists('category');
    }
}
