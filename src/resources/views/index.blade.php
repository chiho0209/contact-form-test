<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Contact</title>
	<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
	<header class="site-title">FashionablyLate</header>
@section('content')
	<main class="container">
		<h1 class="page-title">Contact</h1>

		<form action="{{route('contact.store')}}" method="post" novalidate>
			@csrf
			<div class="field two-col">
				<label for="lastName">お名前 <span class="req">※</span></label>
				<div class="controls">
					<div class="split">
						<input id="lastName" name="lastName" type="text" value="{{ old('name') }}" placeholder="例: 山田" required>
						{{$errors->first('name')}}
						<input id="firstName" name="firstName" type="text" value="{{ old('name') }}" placeholder="例: 太郎" required>
					</div>
				</div>
			</div>
			<div class="field">
				<span class="label">性別</span>
				<div class="controls radios">
					<label><input type="radio" name="gender" value="male" checked> 男性</label>
					<label><input type="radio" name="gender" value="female"> 女性</label>
					<label><input type="radio" name="gender" value="other"> その他</label>
					{{$errors->first('gender')}}
				</div>
			</div>
			<div class="field">
				<label for="email">メールアドレス <span class="req">※</span></label>
				<div class="controls">
					<input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="例: test@example.com" required>
					@error('email')<p>{{ $message }}</p>@enderror
				</div>
			</div>
			<div class="field">
				<label>電話番号</label>
				<div class="controls split hyphen">
					<input type="tel" inputmode="numeric" value="{{ old('tel') }}" pattern="[0-9]*" placeholder="080">
					<input type="tel" inputmode="numeric" value="{{ old('tel') }}" pattern="[0-9]*" placeholder="1234">
					<input type="tel" inputmode="numeric" value="{{ old('tel') }}" pattern="[0-9]*" placeholder="5678">
					{{$errors->first('tel')}}
				</div>
			</div>
			<div class="field">
				<label for="address">住所 <span class="req">※</span></label>
				<div class="controls">
					<input id="address" name="address" type="text" value="{{ old('address') }}" placeholder="例: 東京都渋谷区千谷1-2-3" required>
					{{$errors->first('address')}}
				</div>
			</div>
			<div class="field">
				<label for="building">建物名</label>
				<div class="controls">
					<input id="building" name="building" type="text" value="{{ old('building') }}" placeholder="例: 千寿々々マンション101">
					{{$errors->first('building')}}
				</div>
			</div>
			<div class="field">
				<label for="topic">お問い合わせの種類 <span class="req">※</span></label>
				<div class="controls">
					<div class="select">
						<select id="topic" name="topic" required>
							<option value="" selected>選択してください</option>
							<option>商品について</option>
							<option>配送について</option>
							<option>不具合の報告</option>
							<option>その他</option>
						</select>
						{{$errors->first('category')}}
						<span class="caret" aria-hidden="true">▼</span>
					</div>
				</div>
			</div>
			<div class="field">
				<label for="message">お問い合わせ内容 <span class="req">※</span></label>
				<div class="controls">
					<textarea id="message" name="message" rows="6" value="{{ old('message') }}" placeholder="お問い合わせ内容をご記載ください" required></textarea>
					{{$errors->first('content')}}
				</div>
			</div>

			<div class="actions">
				<button type="submit">確認画面</button>
			</div>
		</form>
	</main>
</body>
</html>