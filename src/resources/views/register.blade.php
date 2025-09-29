<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
    <header class="header">
        <div class="site-title">FashionablyLate</div>
        <a class="login" href="/login">Login</a>
    </header>
    <div class="page-heading">Register</div>
     @if (count($errors) > 0)
     @endif
    <form class="form" action="/register" method="post">
      @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" placeholder="例:山田 太郎" value="{{ old('name') }}" />
        </div>
        <div class="form__error">
         {{$errors->first('name')}}
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
         {{$errors->first('email')}}
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">パスワード</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" placeholder="例: coachtechn06"/>
        </div>
        <div class="form__error">
          {{$errors->first('password')}}
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">登録</button>
    </div>
  </form>
    
</body>
</html>