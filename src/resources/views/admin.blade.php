<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
 	<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>
<body>
    <header class="header">
        <h1 class="site-title">FashionablyLate</h1>
        <a href="#" class="header__logout">logout</a>
    </header>

    <main class="container">
        <div class="admin-panel">
            <h2 class="page-heading">Admin</h2>
            <div class="search-form">
                <input type="text" placeholder="名前やメールアドレスを入力してください" class="search-form__input">
                <select class="search-form__select">
                    <option>性別</option>
                </select>
                <select class="search-form__select">
                    <option>お問い合わせの種類</option>
                </select>
                <select class="search-form__select">
                    <input type="date" id="inputDate" />
                </select>
                <button class="search-form__button search-form__button--search">検索</button>
                <button class="search-form__button search-form__button--reset">リセット</button>
            </div>

            <div class="export-section">
                <p class="export-section__text">エクスポート</p>
            </div>

            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th class="data-table__header">お名前</th>
                            <th class="data-table__header">性別</th>
                            <th class="data-table__header">メールアドレス</th>
                            <th class="data-table__header">お問い合わせの種類</th>
                        </tr>
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->gender}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->content}}</td>
                        </tr>
                        @endforeach
                    </thead>
                    </tbody>
                </table>
                {{$contact->links()}}
            </div>
        </div>
    </main>
</body>
</html>