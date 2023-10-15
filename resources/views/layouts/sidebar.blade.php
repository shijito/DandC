<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            @section('sidebar')
            <p style=""><img src="" ><a href="">マイページ</a></p>
            <p><img src="" ><a href="/logout">ログアウト</a></p>
            <p><img src="" ><a href="">ユーザー検索</a></p>
            <p><img src="" ><a href="">コラボ＆イベント</a></p>
            <p><img src="" ><a href="">スタジオ</a></p>
            @show
        </div>
        <div class="main-container">
            @yield('content')
        </div>
    </div>
</body>
</html>