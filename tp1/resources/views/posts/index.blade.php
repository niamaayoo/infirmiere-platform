<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>

<h1>Liste des Posts</h1>

@foreach($posts as $post)
    <div style="margin-bottom:20px;">
        <h2>{{ $post->titre }}</h2>
        <p>{{ $post->contenu }}</p>
        <hr>
    </div>
@endforeach

</body>
</html>