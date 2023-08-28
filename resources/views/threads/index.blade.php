<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EventFriend</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
       
      <h2>スレッド作成</h2>
      @foreach ($threads as $thread)
        <div class='thread'>
            <h3 class='title'>{{ $thread->title }}</h3>
            <p class='body'>{{ $thread->body }}</p>
        </div>
        Auth::user()->name
      @endforeach
    </body>
</html>
