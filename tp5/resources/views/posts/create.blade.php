<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Créer un post</h1>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Nom du post">
    <input type="text" name="url" placeholder="URL image">

    <button type="submit">Enregistrer</button>
</form>
</body>
</html>