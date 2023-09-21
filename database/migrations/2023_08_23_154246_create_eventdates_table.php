<?php
//eventdatesテーブル
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
        Schema::create('eventdates', function (Blueprint $table) {
            $table->id(); //主キー
            $table->date('date')->nullable(); //イベント期間
            $table->foreignId('thread_id')->constrained('threads'); //外部キーthreads
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventdates');
    }
};
