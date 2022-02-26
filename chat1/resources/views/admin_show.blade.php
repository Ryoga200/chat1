<!DOCTYPE html>
<html lang=ja>
    <head>
        <meta charset="utf-8">
    
        <title>チャット</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/show.css') }}">
    </head>
    <body >
        <header>
            <h1>タイトル：<?//php foreach ($thread as $thr):?>{{$thread["title"]}}<?//php endforeach ?></h1>
            <ul>
            <li>ログインしています</li>
            <li><a href="{{ url('/admin') }}" >スレッド一覧に戻る</a></li>
            <li><a href="{{url('/')}}"  >ログアウト</a></li>

            </ul>
        </header>
        <div class="cb"></div>
        <div class="main_contents">
        <?php foreach ($chats as $index => $chat):?>
            <p>{{$index+1}}.{{$chat['created_at']}}：<span style="font-size:40px;">{{$chat['article']}}</span>　　<button type=“button” onclick="location.href='{{ url("/admin/chat/{$chat['id']}/delete")}}'" class="btn btn-warning">削除</button></p>
            <br>
        <?php endforeach?>
        </div>
    </body>
</html>