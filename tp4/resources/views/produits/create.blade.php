<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
</head>
<body>
    <h2>Ajouter Produit</h2>

<form method="POST" action="/store">
    @csrf
    <input type="text" name="nom" placeholder="Nom">
    <input type="number" name="prix" placeholder="Prix">
    <button type="submit">Ajouter</button>
</form>

<br>
<a href="/">⬅ Retour</a>
</body>
</html>