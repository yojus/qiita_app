<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>記事一覧</h1>
    @if (!empty($articles))
        <ul>
            @foreach ($articles as $article)
                <li>
                    {{ $article->title }}
                </li>
            @endforeach
        </ul>
    @endif
</body>

</html>
