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
    <h3>Tạo tài khoản</h3>
    <input type="text" name="name" placeholder="Nhập tên">
    <input type="email" name="email" placeholder="Nhập email">
    <input type="password" name="password" placeholder="Nhập Password">
    <button type="submit">Đăng ký</button>
    <a href="{{route("users.index")}}">Quay lại</a>
</form>
</body>
</html>
