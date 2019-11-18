<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name')->unique();// tên đăng nhập admin
            $table->tinyInteger('roles');// quyền
            $table->string('password');// mật khẩu đăng nhập
            $table->string('email')->unique();// email
            $table->tinyInteger('status');// trạng thải 1: hoạt động , 2: khóa
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
}
