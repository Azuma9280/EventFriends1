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
        <div class='side_search'>
            <h3>カテゴリー一覧</h3>
            <form action=" {{route('thread.index') }}" method="GET">
                
            @csrf
            
                <input type="text" name="keyword">
                <input type="submit" value="検索">
            </form>
        </div>
        <div class='side_category'>
                @foreach ($categories as $category)
                        <p>
                            <a href="/category/{{ $category->id }}">{{ $category->name }}</a>
                        </p>
                @endforeach
        </div>
        <div class='category'>
            <h3 class="name">{{ $category->name }}</h3> <!-- category/idごとに変わるnameを表示させたい、かつthread_idにcategory_idがついてるからそれを何件か表示させたい -->
        </div>
        
        <div class="footer">
            <a href="/home">戻る</a>
        </div>
    </body>