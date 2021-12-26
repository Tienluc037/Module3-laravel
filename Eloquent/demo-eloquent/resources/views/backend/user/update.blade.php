<form method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên" value="{{"$user->name"}}">
    <input type="email" name="email" placeholder="Nhập email" value="{{"$user->email"}}">
    <input type="password" name="password" placeholder="Nhập password" value="{{"$user->password"}}">
    <button type="submit">Lưu</button>
    <a href="{{route("users.index")}}">Quay lại</a>
</form>
