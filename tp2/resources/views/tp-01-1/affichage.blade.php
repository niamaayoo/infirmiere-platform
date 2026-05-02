<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'étudiant</title>

    <style>
        body{
            font-family: Arial;
        }

        table{
            border-collapse: collapse;
            width: 70%;
        }

        td{
            border: 1px solid #ccc;
            padding: 15px;
        }

        .left{
            background-color: #eee;
            font-weight: bold;
            width: 30%;
        }
    </style>
</head>

<body>

<h1>Détails de l'étudiant</h1>

<table>

    <tr> 
        <td class="left">Nom</td>
        <td>{{ $nom }}</td>
    </tr>

    <tr>
        <td class="left">Prénom</td>
        <td>{{ $prenom }}</td>
    </tr>

    <tr>
        <td class="left">Poste</td>
        <td>{{ $poste }}</td>
    </tr>

    <tr>
        <td class="left">Modules enseignés</td>
        <td>
            <ul>
                @foreach($Modules as $module)
                    <li>{{ $module }}</li>
                @endforeach
            </ul>
        </td>
    </tr>

</table>

</body>
</html>