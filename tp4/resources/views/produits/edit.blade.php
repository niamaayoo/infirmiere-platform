<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <h2>Modifier Produit</h2>

<form method="POST" action="/update/{{ $produit->id }}">
    @csrf
    <input type="text" name="nom" value="{{ $produit->nom }}">
    <input type="number" name="prix" value="{{ $produit->prix }}">
    <button type="submit">Modifier</button>
</form>

<br>
<a href="/">⬅ Retour</a>
</body>
</html>