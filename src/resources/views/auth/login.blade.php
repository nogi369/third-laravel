<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン画面</title>
  @extends('layouts.app')

  @section('css')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  @endsection
</head>

<body>
  @section('content')
  <div class="login__content">
    <div class="login-form__heading">
      <h2>ログイン</h2>
    </div>
    <form class="form" action="/login" method="post">
        @csrf
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="email" name="email" value="{{ old('email') }}" />
          </div>
          <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">パスワード</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="password" name="password" />
          </div>
          <div class="form__error">
            @error('password')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">ログイン</button>
      </div>
    </form>
    <div class="register__link">
      <a class="register__button-submit" href="/register">会員登録の方はこちら</a>
    </div>
  </div>
  @endsection
</body>

</html>