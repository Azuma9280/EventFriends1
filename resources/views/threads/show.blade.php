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
            <h3 class="start">{{ $thread->start_date }}</h3>
            <h3 class="end">{{ $thread->end_date }}</h3>
            <h3 class="url">
                添付URL:<a href="{{ $thread->upload_iamge }}">{{ $thread->upload_url }}</a>
            </h3>
            @if($thread->upload_image)
            <div class="image">
                <img src="{{ $thread->upload_image }}" alt="画像が読み込めません。"/>
            </div>
            @endif
            <h3 class="content">本文:{{ $thread->content }}</h3>
            
        </div>
        
        @if($thread->comments->count() > 0) <!--コメントのカウントが0の場合コメントがありませんって表示する -->
        <div class="comment">
            @foreach ($thread->comments as $comment)
                <h3 class="content">{{ $comment->content }}</h3>
                <h3 class="url">{{ $comment->upload_url}}</h3>
            @if($comment->upload_image)
            <div class="image">
                <img src="{{ $comment->upload_image }}" alt="画像が読み込めません。"/>
            </div>
            @endif
            @endforeach
        </div>
        @else
            <h3>コメントはまだありません。</h3>
        @endif
        
        <h3>コメント作成</h3>
        <form action="/comments/" method="post" enctype="multipart/form-data">  
            @csrf
            <label for="content">コメント:</label><br>
            <textarea  name="comment[content]" rows="4" placeholder="内容" required></textarea><br>
            
            <label for="attachment">添付ファイル:</label>
            <input type="file"  name="image"><br>

            <label for="attachment_url">添付URL:</label>
            <input type="text"  name="comment[upload_url]" placeholder="イベントのホームページ等"><br>
            
            <input type="submit" value="コメント作成"/>
        </form>　　　 <!-- redirectで同じ画面を表示させるかつデータを取り直しblade、コメントが下に表示されていく様子 -->
        <div class="footer">
            <a href="/home">戻る</a>
        </div>
    </body>
</html>
