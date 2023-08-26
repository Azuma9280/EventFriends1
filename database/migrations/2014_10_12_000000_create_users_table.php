<?php
//usersテーブル
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //主キー
            $table->string('name'); //ユーザー名
            $table->string('email')->unique(); //メアド
            $table->string('password'); //パスワード
            $table->string('display_name'); //表示名
            $table->timestamp('last_login_at'); //最終ログイン日
            $table->timestamps(); //created_at,updated_atを作成
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
};
