<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ホーム</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
    </head>
    <body>
        <div class='main'>
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
        </div>
        <div class='rule__title'>
            <h3>イベントフレンドの使い方&ルール</h3>
        </div>
        <div class='rule__body'>
            <h3>使い方:</h3>
            <h3>createボタンからスレッド作成できます。</h3>
            <h3>スレッドはイベントのタイトルと本文、開始日、終了日を入力してください。</h3>
            <h3>削除キーは5桁の半角数字を入力してください。</h3>
            <h3>ルール:</h3>
            <h3>たくさんの人に見られているということを意識して、節度あるコメントで楽しんでください。</h3>
        </div>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>
    </body>