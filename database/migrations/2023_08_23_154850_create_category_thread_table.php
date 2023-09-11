<?php
//中間テーブル
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
        Schema::create('category_thread', function (Blueprint $table) {
            $table->id();
            $table->foreignId('thread_id')->constrained('threads'); //外部キーthreads
            $table->foreignId('category_id')->constrained('categories'); //外部キーcategories
            $table->timestamps(); //created_at,created_at作成
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catagory_thread');
    }
};
