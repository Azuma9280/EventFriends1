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
         <!-- threadの入力したが表示されるようにしたい -->
        <h3 class="title">
             
        </h3>
        <div class="content">
            <div class="content__thread">
                <h3>本文</h3>
               
            </div>
        </div>
        <h3>コメント作成</h3>
        <form action="/" method="post" enctype="multipart/form-data">  <!-- "/"のところでpostメソッドを指定してそれをweb.phpでContorollerに与えてルーティングする -->
            @csrf
            <label for="content">本文:</label><br>
            <textarea  name="comment[content]" rows="4" placeholder="内容" required></textarea><br>
            
            <label for="attachment">添付ファイル:</label>
            <input type="file"  name="comment[upload_image]"><br>

            <label for="attachment_url">添付URL:</label>
            <input type="text"  name="comment[upload_url]" placeholder="イベントのホームページ等"><br>
            
            <input type="submit" value="コメント作成"/>
        </form>　　　 <!-- redirectで同じ画面を表示させるかつデータを取り直blade -->
    </body>
</html>
