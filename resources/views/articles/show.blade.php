<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $article->title }}</h1>
    <div>
        {{-- {!! Str::markdown($article->body, ['html_input' => 'escape']) !!} --}}
        {{ $article->html }}
    </div>
</body>

</html>
