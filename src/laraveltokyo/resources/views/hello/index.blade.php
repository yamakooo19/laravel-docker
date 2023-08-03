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

    <script>
        function doAction() {
            var id = document.querySelector('#id').value;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/hello/json/' + id, true);
            xhr.responseType = 'json';
            xhr.onload = function(e) {
                if (this.status == 200) {
                    var result = this.response;
                    document.querySelector('#name').textContent = result.name;
                    document.querySelector('#mail').textContent = result.mail;
                    document.querySelector('#age').textContent = result.age;
                }
            };
            xhr.send();
        }
    </script>
</head>

<body>
    <h1>Hello/Index</h1>
    <p>{{ $msg }}</p>
    <div>
        <form action="/hello" method="post">
            @csrf
            <input type="text" id="find" name="find" value="{{ $input }}">
            <input type="submit">
        </form>
    </div>
    <hr>
    <table border="1">
        @foreach ($data as $item)
            <tr>
                <th>{{ $item->id }}</th>
                <td>{{ $item->all_data }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
