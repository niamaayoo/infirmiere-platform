<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produits</title>
</head>
<body>
    <h1>Liste des produits</h1>

<a href="{{ route('produits.create') }}">Ajouter</a>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Prix (DH)</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produits as $produit)
        <tr>
            <td>{{ $produit->id }}</td>
            <td>{{ $produit->titre }}</td>
            <td>{{ $produit->prix }}</td>
            <td>
                <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>