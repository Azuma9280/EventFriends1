<?php
//threadsテーブル
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
        Schema::create('threads', function (Blueprint $table) {
            $table->id(); //主キー
            $table->timestamps(); //created_at,updated_at
            $table->string('title', 50); //タイトル
            $table->string('content', 500); //本文 
            $table->integer('view')->default(0); //閲覧数
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('delete_key'); //削除キー
            $table->softDeletes(); //deleted_at作成
            $table->string('upload_image', 300)->nullable(); //添付画像
            $table->string('upload_url', 300)->nullable(); //添付URL
            $table->foreignId('user_id')->constrained('users');//外部キーusers
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threads');
    }
};
