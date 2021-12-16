<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<a href="{{ route("author.showFormCreate") }}">add new</a>
<table border="1px">

        <tr>
            <th>ID</th>
            <th>name</th>
            <th>phone</th>
            <th colspan="3">Action</th>
        </tr>

    <tbody>
    @foreach($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ $author->phone }}</td>
            <td><a href="{{ route("author.show", $author->id) }}">Delail</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
