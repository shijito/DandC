<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('registerPost') }}" method="POST">
        <div class="w-25 vh-75 border p-3" style="box-shadow:2px 2px 4px gray; border-radius:10px; background-color:white;">
            <div class="register_form">
                <!--ニックネーム-->
                <div class="over_name_block" style="width:140px">
                    @if($errors->first('over_name'))
                    <span class="error_message">{{ $errors->first('over_name') }}</span>
                    @endif
                    <label class="d-block mt-3" style="font-size:13px">ユーザーネーム</label>
                    <div class="border-bottom border-primary" style="width:175px;">
                        <input type="text" style="width:175px;" class="border-0 over_name" name="over_name">
                    </div>
                </div>
                <!--メアド-->
                <div class="mt-3 mail_address_block">
                    @if($errors->first('mail_address'))
                    <span class="error_message">{{ $errors->first('mail_address') }}</span>
                    @endif
                    <label class="m-0 d-block" style="font-size:13px;">メールアドレス</label>
                    <div class="border-bottom border-primary" style="width:395px;">
                        <input type="mail" class="w-100 border-0 mail_address" name="mail_address">
                    </div>
                </div>
                <!--役職-->
                <div class="mt-3 role_block">
                    @if($errors->first('role'))
                    <span class="error_message">{{ $errors->first('role') }}</span>
                    @endif
                    <label class="d-block m-0" style="font-size:13px">役職</label>
                    <input type="radio" name="role" class="admin_role role" value="1">
                    <label style="font-size:13px">ダンサー</label>
                    <input type="radio" name="role" class="admin_role role" value="2">
                    <label style="font-size:13px">撮影者</label>
                    <input type="radio" name="role" class="admin_role role" value="3">
                    <label style="font-size:13px">どちらも</label>
                </div>
                <!--パスワード-->
                <div class="mt-3 password_block">
                    @if($errors->first('password'))
                    <span class="error_message">{{ $errors->first('password') }}</span>
                    @endif
                    <label class="d-block m-0" style="font-size:13px">パスワード</label>
                    <div class="border-bottom border-primary" style="width:395px;">
                        <input type="password" class="border-0 w-100 password" name="password">
                    </div>
                </div>
                <div class="mt-3 password_confirmation_block">
                    @if($errors->first('password_confirmation'))
                    <span class="error_message">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                    <label class="d-block m-0" style="font-size:13px">確認用パスワード</label>
                    <div class="border-bottom border-primary" style="width:395px;">
                        <input type="password" class="border-0 w-100 password_confirmation" name="password_confirmation">
                    </div>
                </div>
                <!--新規登録ボタン-->
                <div class="mt-3 text-right pr-4">
                    <input type="submit" class="btn btn-primary register_btn" disabled value="新規登録" onclick="return confirm('登録してよろしいですか？')">
                </div>
                <!--ログイン画面へ遷移-->
                <div class="text-center mb-2">
                    <a href="{{ route('loginView') }}">ログインはこちら</a>
                </div>
            </div>
        {{ csrf_field() }}
        </div>
    </form>
</body>
</html>