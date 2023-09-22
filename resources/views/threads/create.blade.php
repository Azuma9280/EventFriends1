<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Create Thread</title>
        
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">

    </head>
    <body>
        <h3>スレッド作成</h3>
        <form action="/threads" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">タイトル:</label>
            <input type="text"  name="thread[title]" placeholder="タイトル" value="{{ old('thread.title') }}"><br>
            <p class="title__error" style="color:red">{{ $errors->first('thread.title') }}</p>

            <label for="content">本文:</label><br>
            <textarea name="thread[content]" rows="4" placeholder="内容">{{ old('thread.content') }}</textarea><br> 
            <p class="content__error" style="color:red">{{ $errors->first('thread.content') }}</p>

            <label for="start_date">開催日:</label>
            <input type="date"  name="eventdate[start_date]" value="{{ old('eventdate.start_date') }}"><br>
            <p class="start_date__error" style="color:red">{{ $errors->first('eventdate.start_date') }}</p>
            
            <label for="end_date">終了日:</label>
            <input type="date"  name="eventdate[end_date]" value="{{ old('eventdate.end_date') }}"><br>
            <p class="end_date__error" style="color:red">{{ $errors->first('eventdate.end_date') }}</p>
            
            <label for="attachment">添付ファイル:</label>
            <input type="file"  name="thread[upload_image]" value="{{ old('thread.upload_image') }}"><br>
            <p class="upload_image__error" style="color:red">{{ $errors->first('thread.upload_image') }}</p>

            <label for="attachment_url">添付URL:</label>
            <input type="text"  name="thread[upload_url]" placeholder="イベントのホームページ等" value="{{ old('thread.upload_url') }}"><br>
            <p class="upload_url__error" style="color:red">{{ $errors->first('thread.upload_url') }}</p>

            <label for="delete_key">削除キー:</label>
            <input type="password"  name="thread[delete_key]" placeholder="12345"value="{{ old('thread.delete_key') }}"><br>
            <p class="delete_key__error" style="color:red">{{ $errors->first('thread.delete_key') }}</p>

            <button type="submit"  value="store">スレッド作成</button>
        </form>
        <div class="footer">
            <a href="/dashboard">戻る</a> <!-- リンクがshow.blade.phpに飛びたい -->
        </div>
    </body>
</html>