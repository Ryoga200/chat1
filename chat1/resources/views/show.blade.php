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
            <li><a href="{{ url('/') }}">スレッド一覧へ戻る</a></li>
            <li><a href="{{ url('/new') }}">スレッドをたてる</a></li>
            <li><a href="{{url('/login')}}">管理者ログイン</a></li>
            </ul>
        </header>
        <div class="cb"></div>
        <div class="main_contents">
        <?php foreach ($chats as $index => $chat):?>
            
            <p>{{$index+1}}.{{$chat['created_at']}}：<span style="font-size:40px;">{{$chat['article']}}</span></p>
            <br>
           
        <?php endforeach?>
        </div>
        <div class="article_form">
        <h2>チャットをうつ</h2>
        
        <form action="{{ url("/thread/{$thread['id']}/create")}}" method="POST">
        {{ csrf_field() }}
    <textarea name="article"  cols="25" rows="2"placeholder="チャットを入力" autofocus></textarea>
    <br>
    <br>
    <button class="btn btn-success">投稿</button>
    </form>
       
        </div>
    </body>
</html>