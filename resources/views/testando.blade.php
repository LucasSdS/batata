<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>TESTE</title>
</head>
<body>
@foreach($posts as $post)
    <li>
        <h1>{{$post->title}}</h1>
        <h5>Postado por: {{$post->user->name}}</h5>
        <p>{{$post->content}}</p>
    </li>
    @endforeach
</body>
</html>