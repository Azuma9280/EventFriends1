<?php
//commentsテーブル
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
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); //主キー
            $table->timestamps(); //created_at,created_at作成
            $table->string('content', 500); //本文
            $table->string('upload_url')->nullable(); //添付URL
            $table->string('upload_image')->nullable(); //添付画像
            $table->foreignId('thread_id')->constrained('threads'); //外部キーthreads
            $table->foreignId('user_id')->constrained('users'); //外部キーusers
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
