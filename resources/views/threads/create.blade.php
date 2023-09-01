<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Create Thread</title>
        
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <h3>スレッド作成</h3>
        <form action="{{ route('store_thread') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="title">タイトル:</label>
            <input type="text" id="title" name="title" required><br>

            <label for="name">表示名:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="content">本文:</label><br>
            <textarea id="content" name="content" rows="4" required></textarea><br>　<!-- カリキュラム18のように入れ子構造にしてidはいらない,nameとplaceholderをつくる -->
            
            <label for="start_date">開催日:</label>
            <input type="date" id="start_date" name="start_date" required><br>
            
            <label for="end_date">終了日:</label>
            <input type="date" id="end_date" name="end_date" required><br>
            
            <label for="attachment">添付ファイル:</label>
            <input type="file" id="attachment" name="attachment"><br>

            <label for="attachment_url">添付URL:</label>
            <input type="text" id="attachment_url" name="attachment_url"><br>

            <label for="delete_key">削除キー:</label>
            <input type="password" id="delete_key" name="delete_key" required><br>

            <button type="submit">スレッド作成</button>
    </body>
</html>