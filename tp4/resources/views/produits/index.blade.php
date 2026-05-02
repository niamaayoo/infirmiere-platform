<!DOCTYPE html>
<html>
<head>
    <title>Liste Produits</title>
</head>
<body>

<h2>Liste des Produits</h2>

<!-- AUTH -->
@if (Route::has('login'))
<nav>
    @auth
        <a href="{{ url('/dashboard') }}">Dashboard</a>
    @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endauth
</nav>
@endif

<br>

@auth
<a href="/create">➕ Ajouter Produit</a>
@endauth

<br><br>

<!-- SEARCH -->
<form method="GET" action="/">
    <input type="text" name="search" placeholder="Rechercher">
    <button>Search</button>
</form>

<br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Actions</th>
    </tr>

    @foreach($produits as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nom }}</td>
        <td>{{ $p->prix }}</td>

        @auth
        <td>
            <a href="/edit/{{ $p->id }}">Modifier</a>

            <a href="/delete/{{ $p->id }}"
               onclick="return confirm('Supprimer ce produit ?')">
               Supprimer
            </a>
        </td>
        @endauth
        @guest
        <td>🔒 Non autorisé</td>
        @endguest
    </tr>
    @endforeach

</table>

</body>
</html>