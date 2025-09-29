<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
  <main>
    @section('content')
    <div class="thankyou-container">
        <h1 class="message">お問い合わせありがとうございました</h1>
        <a href='/' class="home-button">HOME</a>
    </div>
    <div class="background-text">Thank you</div>
    @endsection
  </main>
</body>

</html>
