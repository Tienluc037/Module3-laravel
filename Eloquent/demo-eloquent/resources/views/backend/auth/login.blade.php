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
<form method="post">
    @csrf
    <h3>Đăng nhập</h3>
<input type="email" name="email" placeholder="Nhập email">
<input type="password" name="password" placeholder="Nhập Password">
    <button type="submit">Đăng nhập</button>
    <a href="{{route("users.create")}}">Quay lại</a>

</form>
</body>
</html>

