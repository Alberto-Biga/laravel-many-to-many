<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: lightcoral;
        }
    </style>
</head>
<body>
    <h2>Ciao, hai creato correttamente il nuovo Post: {{$post->title}}</h2>
    <p>Categoria: {{$post->Category->label}} </p>
    <ul>
        @forelse ($post->tags as $tag)
            <li>{{$tag->label}}</li>
        @empty
            <p>
                Tag non specificato
            </p>
        @endforelse    
    </ul>
    
</body>
</html>