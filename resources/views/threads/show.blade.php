<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>作成したスレッドとコメント作成欄</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
    </head>
    <body>
        <div class="thread">
            <h3 class="title">{{ $thread->title }} </h3>
            <h3 class="view">{{ $thread->view }}</h3>

            <h3 class="url">{{ $thread->upload_url }}</h3>
            <h3 class="image">{{ $thread->upload_image }}</h3>
            <h3 class="content">{{ $thread->content }}</h3>
            
        </div>
        <h3>コメント作成</h3>
        <form action="/" method="post" enctype="multipart/form-data">  <!-- "/"のところでpostメソッドを指定してそれをweb.phpでContorollerに与えてルーティングする -->
            @csrf
            <label for="content">コメント:</label><br>
            <textarea  name="comment[content]" rows="4" placeholder="内容" required></textarea><br>
            
            <label for="attachment">添付ファイル:</label>
            <input type="file"  name="comment[upload_image]"><br>

            <label for="attachment_url">添付URL:</label>
            <input type="text"  name="comment[upload_url]" placeholder="イベントのホームページ等"><br>
            
            <input type="submit" value="コメント作成"/>
        </form>　　　 <!-- redirectで同じ画面を表示させるかつデータを取り直blade -->
        <div class="footer">
            <a href="/home">戻る</a>
        </div>
    </body>
</html>
