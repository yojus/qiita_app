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
                    {{-- <a href="/articles/{{ $articles->id }}"></a> --}}
                    <a href="{{ route('articles.show', $article->id) }}">
                        {{ $article->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
    {{-- buttonにはtypeをつけたほうが良い --}}
    <button type="button" onclick="location.href='{{ route('articles.create') }}' ">記事投稿</button>
</body>

</html>
