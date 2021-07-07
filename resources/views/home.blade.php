<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
</head>

<body>

    <h1>Hello World</h1>

    <h3>Lista Studenti:</h3>

    <ol>
        @foreach ($studenti as $studente)
        <li>
            <ul>
                <li>{{$studente["nome"]}}</li>
                <li>{{$studente["cognome"]}}</li>
            </ul>
        </li>
        @endforeach
    </ol>

    <h3>Lista Docenti:</h3>

    <ol>
        @foreach ($docenti as $docente)
        <li>
            <ul>
                <li>{{$docente["nome"]}}</li>
                <li>{{$docente["cognome"]}}</li>
            </ul>
        </li>
        @endforeach
    </ol>

</body>

</html>