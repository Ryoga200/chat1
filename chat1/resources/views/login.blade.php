<!DOCTYPE html>
<html lang=ja>
    <head>
        <meta charset="utf-8">
    
        <title>チャット</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    </head>
    <body >
        <header>
            <h1>管理者ログイン画面</h1>
            <ul>
            <li><a href="{{ url('/new') }}">スレッドをたてる</a></li>
            <li><a href="{{ url('/') }}">スレッド一覧へ戻る</a></li>
            </ul>
        </header>
        <div class="cb"></div>
        <?php if($error1==1):?>
        <p style="color:red">パスワードが間違っています</p>
        <?php endif ?>
        <div class="main_contents">
        <form action="{{ url('auth') }}" method="POST">
        {{ csrf_field() }}
    パスワードを入力:<br>
    <input type="password" name="pass" placeholder="パスワードを入力" autofocus></textarea>
    <br>
    <br>
    <button class="btn btn-success">スレッドを立てる</button>
    </form>
        </div>
            </body>
</html>