<!DOCTYPE html>
<html lang=ja>
    <head>
        <meta charset="utf-8">
    
        <title>チャット</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/thread_new.css') }}">
    </head>
    <body >
        <header>
            <h1>チャットルームへようこそ</h1>
            <ul>
            <li><a href="{{ url('/') }}">スレッド一覧へ戻る</a></li>
            <li><a href="{{url('/login')}}">管理者ログイン</a></li>
            </ul>
        </header>
        <div class="cb"></div>
        <br>
        <div class="threadform">
        <h2>スレッドの内容を入力してください</h2>
        
        <form action="{{ url('create') }}" method="POST">
        {{ csrf_field() }}
    タイトル:<br>
    <textarea name="title"  cols="25" rows="2"placeholder="スレッドのタイトルを入力" autofocus></textarea>
    <br>
    <br>
    <button class="btn btn-success">スレッドを立てる</button>
    </form>
        </div>
    </body>
</html>
