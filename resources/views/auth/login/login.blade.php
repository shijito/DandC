<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCc</title>
</head>
<body style="background-color:#ECF1F6;">
    <form action="" method="POST"><!--actionにルート記載-->
        <div class="border vh-50 w-25" style="border-radius:10px; box-shadow:2px 2px 4px gray; background-color:white;">
            <div class="w-75 m-auto pt-5">
                <label class="d-block m-0" style="font-size:13px;">メールアドレス</label>
                <div class="border-bottom border-primary w-100"><input type="text" class="w-100 border-0" name="mail_address"></div>
            </div>
            <div class="w-75 m-auto pt-5">
                <label class="d-block m-0" style="font-size:13px;">パスワード</label>
                <div class="border-bottom border-primary w-100"><input type="password" class="w-100 border-0" name="password"></div>
            </div>
            <div class="text-right m-3 pr-4"><input type="submit" class="btn btn-primary" value="ログイン"></div>
            <div class="text-center mb-5"><a href="">新規登録はこちら</a></div><!--hrefにルート記載-->
        </div>
        {{ csrf_field() }}
    </form>
</body>
</html>