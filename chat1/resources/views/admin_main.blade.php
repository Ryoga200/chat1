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
            <li><p>ログインしています</p></li>
            <li><a href="{{url('/')}}" onclick="sendPost(event)">ログアウト</a></li>
            </ul>
        </header>
        <div class="cb"></div>
        <div class="main_contents">
        <?php foreach ($threads as $thread):?>
            <h2>タイトル：
     <a href="{{ url("/admin/thread/{$thread['id']}")}}" >{{$thread['title']}}</a></h2><p>作成日：{{$thread['created_at']}}</p>
     <button type=“button” onclick="location.href='{{ url("/admin/thread/{$thread['id']}/delete")}}'" class="btn btn-warning">削除</button>
     <br>
        <?php endforeach?>
        </div>
    </body>
</html>