<!DOCTYPE html>
<html lang=ja>
    <head>
        <meta charset="utf-8">
    
        <title>チャット</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    </head>
    <body >
        <header>
            <h1>チャットルームへようこそ</h1>
            <ul>
            <li><a href="{{ url('/new') }}">スレッドをたてる</a></li>
            <li><a href="{{url('/login')}}">管理者ログイン</a></li>
            </ul>
        </header>
        <div class="cb"></div>
        <div class="main_contents">
        <?php foreach ($threads as $thread):?>
            <h2>タイトル：
     <a href="{{ url("/thread/{$thread['id']}")}}">{{$thread['title']}}</a></h2><p>作成日：{{$thread['created_at']}}</p>
            <br>
        <?php endforeach?>
        </div>
    </body>
</html>

