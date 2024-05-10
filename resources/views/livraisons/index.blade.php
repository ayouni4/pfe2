<!--<!DOCTYPE html>
<html>
<head>
    <title>Liste des Livraisons</title>
</head>
<body>
    <h1>Liste des Livraisons</h1>
    <table>
        <thead>
            <tr>
                <th>ID Colis</th>
                <th>Code Colis</th>
                <th>Nom Domicile</th>
                <th>Prénom Domicile</th>
            </tr>
        </thead>
        <tbody>
            @foreach($livraisons as $livraison)
            <tr>
                <td>{{ $livraison->id }}</td>
                <td>{{ $livraison->code }}</td>
                <td>{{ $livraison->nom }}</td>
                <td>{{ $livraison->prenom }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
-->
