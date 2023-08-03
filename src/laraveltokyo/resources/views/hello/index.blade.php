<!DOCTYPE html>
<html lang="ja">

<head>
    <title>Index</title>
    <link rel="stylesheet" href={{ mix('css/app.css') }}>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        th {
            background-color: red;
            padding: 10px;
        }

        td {
            background-color: #eee;
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>Hello/Index</h1>
    <p>{{ $msg }}</p>
    <ol>
        @foreach ($data as $item)
            <li>{{ $item->name }} [{{ $item->mail }},{{ $item->age }}]</li>
        @endforeach
    </ol>
    <hr>
    {!! $data->links() !!}
</body>

</html>
