{{--{{dd($staffs)}}--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Group</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Card</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
    </thead>
    <tbody>
    @foreach($staffs as $staff)
        <tr>
            <td>{{$staff->id}}</td>
            <td>{{$staff->name}}</td>
            <td>{{$staff->group}}</td>
            <td>{{$staff->gender}}</td>
            <td>{{$staff->phone}}</td>
            <td>{{$staff->card}}</td>
            <td>{{$staff->email}}</td>
            <td>{{$staff->address}}</td>


        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
