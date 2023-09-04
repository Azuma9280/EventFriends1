<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>作成したスレッドとコメント作成欄</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
         <!-- threadの入力したが表示されるようにしたい -->
        <h3>コメント作成</h3>
        <form action="/" method="post" enctype="multipart/form-data">  <!-- "/"のところでpostメソッドを指定してそれをweb.phpでCOntorollerに与えてルーティングする -->
            @csrf
            <label for="name">表示名:</label>
            <input type="text"  name="user[display_name]" placeholder="お名前" required><br>
            
            <label for="content">本文:</label><br>
            <textarea  name="comment[content]" rows="4" placeholder="内容" required></textarea><br>
            
            <label for="attachment">添付ファイル:</label>
            <input type="file"  name="thread[upload_image]"><br>

            <label for="attachment_url">添付URL:</label>
            <input type="text"  name="thread[upload_url]" placeholder="イベントのホームページ等"><br>
            
            <input type="submit" value="コメント作成"/>
        </form>　　　 <!-- redirectで同じ画面を表示させるかつデータを取り直す -->
    </body>
</html>
