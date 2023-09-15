<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ホーム</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h3>人気のイベント</h3>
        <!-- viewのカウントが大きい順3,5個 -->
            @foreach ($threads_view as $thread)
                    <!--<div style='border:solid 1px; margin-bottom: 10px;'>-->
                    <p>
                        <a href="/thread/{{ $thread->id }}">{{ $thread->title }}</a>
                    </p>
            @endforeach
        <h3>今日のイベント</h3>
        <!-- dateが今日と一致する中でのviewのカウントが大きい順3,5個 -->
            @foreach ($threads_today_view as $thread)
                    <!--<div style='border:solid 1px; margin-bottom: 10px;'>-->
                    <p>
                        <a href="/thread/{{ $thread->id }}">{{ $thread->title }}</a>
                    </p>
            @endforeach
        <h3>予定されているイベント</h3>
        <!-- dateが先1か月でviewのカウントが大きい順3,5個 -->
            @foreach ($threads_future_view as $thread)
                    <!--<div style='border:solid 1px; margin-bottom: 10px;'>-->
                    <p>
                        <a href="/thread/{{ $thread->id }}">{{ $thread->title }}</a>
                    </p>
            @endforeach
        
        <div class='rule__title'>
            <h3>イベントフレンドの使い方&ルール</h3>
        </div>
        <div class='rule__body'>
            <h3>createボタンからスレッド作成できます。</h3>
        </div>
    </body>