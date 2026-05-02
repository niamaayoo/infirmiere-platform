<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <h1>Ajouter un produit</h1>

<form action="{{ route('produits.store') }}" method="POST">
    @csrf
    <input type="text" name="titre" placeholder="Titre">
    <input type="number" name="prix" placeholder="Prix">
    <button type="submit">Ajouter</button>
</form>
</body>
</html>