<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>
</head>
<body>
    <header>
        <h1>{{$title}}</h1>
    </header>
    <main>
        <p>
            {{$user}}, {{$title}}
        </p>
        <p>
            Visit our blog: <a href="/blog">BLOG</a>
        </p>
    </main>
</body>
</html>