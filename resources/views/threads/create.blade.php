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
        <form action="/threads" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">タイトル:</label>
            <input type="text"  name="thread[title]" placeholder="タイトル" value="{{ old('thread.title') }}"><br>
            <p class="title__error" style="color:red">{{ $errors->first('thread.title') }}</p>

            <label for="content">本文:</label><br>
            <textarea name="thread[content]" rows="4" placeholder="内容" value="{{ old('thread.content') }}"></textarea><br> <!-- カリキュラム18のように入れ子構造にしてidはいらない,nameとplaceholderをつくる -->
            <p class="content__error" style="color:red">{{ $errors->first('thread.content') }}</p>

            <label for="start_date">開催日:</label>
            <input type="date"  name="eventdate[start_date]" required><br>
            
            <label for="end_date">終了日:</label>
            <input type="date"  name="eventdate[end_date]" required><br>
            
            <label for="attachment">添付ファイル:</label>
            <input type="file"  name="thread[upload_image]"><br>

            <label for="attachment_url">添付URL:</label>
            <input type="text"  name="thread[upload_url]" placeholder="イベントのホームページ等"><br>

            <label for="delete_key">削除キー:</label>
            <input type="password"  name="thread[delete_key]" placeholder="12345"value="{{ old('thread.delete_key') }}"><br>
            <p class="delete_key__error" style="color:red">{{ $errors->first('thread.delete_key') }}</p>

            <button type="submit"  value="store">保存</button>
        </form>
    </body>
</html>