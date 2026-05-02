<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des posts</h1>

<a href="{{ route('posts.create') }}">Ajouter</a>

@foreach($posts as $post)
    <h3>{{ $post->name }}</h3>

    @foreach($post->images as $img)
        <p>{{ $img->url }}</p>
    @endforeach
@endforeach


</body>
</html>