<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Paises</h1>
    <table>
        <thead>
            <tr>
                <th scope="col">Pais</th>
                <th scope="col">Capital</th>            
                <th scope="col">Moneda</th>
                <th scope="col">Ciudades</th>            
            </tr>
        </thead>
        <tbody>
        @foreach($paises as $pais => $informacion)
            <tr>
                <td rowspan="2">{{ $pais }}</td>
                <td rowspan="2">{{ $informacion["Capital"] }}</td>
                <td rowspan="2">{{ $informacion["Moneda"] }}</td>
                <td>{{ $informacion["Ciudades"][0] }} {{ $informacion["Ciudades"][1] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>