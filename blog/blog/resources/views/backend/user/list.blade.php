{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<a href="{{route("register")}}">Tạo tài khoản</a><br>--}}
{{--<button><a href="{{route("login")}}">Đăng xuất</a></button>--}}
{{--<button><a href="{{route("posts.index")}}">Bài viết</a></button>--}}
{{--<table border="1px">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>ID</th>--}}
{{--        <th>Name</th>--}}
{{--        <th>Email</th>--}}
{{--        <th colspan="3">Action</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach($users as $user)--}}
{{--        <tr>--}}
{{--            <td>{{$user->id}}</td>--}}
{{--            <td>{{$user->name}}</td>--}}
{{--            <td>{{$user->email}}</td>--}}
{{--            <td><a href="{{route("users.show",$user->id)}}">Detail</a></td>--}}
{{--            <td><a href="{{route("users.update",$user->id)}}">Update</a></td>--}}
{{--            <td><a onclick="return confirm('Bạn có muốn xóa?')" href="{{route("users.destroy",$user->id)}}">Delete</a></td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--</body>--}}
{{--</html>--}}
@extends("backend.layout.master")
@section("title","Danh sách người dùng")
@section("title-content","Danh sách người dùng")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
{{--            <h6 class="m-0 font-weight-bold text-primary">Danh sách người dùng</h6>--}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th colspan="3" style="text-align: center">Action</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td> <button type="button" class="btn btn-outline-primary"><a href="{{route("users.show",$user->id)}}"><i class="fas fa-user-check" style="color: #b981b4"></i></a></button></td>
                                <td><button type="button" class="btn btn-outline-primary"><a href="{{route("users.update",$user->id)}}"><i class="fas fa-user-cog" style="color: #b981b4"></i></a></button></td>
                                <td><button type="button" class="btn btn-outline-primary"><a onclick="return confirm('Bạn có muốn xóa?')" href="{{route("users.destroy",$user->id)}}"><i class="fas fa-trash-alt"style="color: #b981b4"></i></a></button></td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
