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
{{--<form action="" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="title" placeholder="Tiêu đề" value="{{$post->title}}">--}}
{{--    <input type="text" name="content" placeholder="Nội dung" value="{{$post->content}}">--}}
{{--    <select name="user_id">--}}
{{--        @foreach(\App\Models\User::all() as $user)--}}
{{--            <option value="{{$user->id}}">{{$user->name}}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--    <hr>--}}
{{--    <h4>Thể loại:</h4>--}}

{{--    @foreach($categories as $category)--}}
{{--        <input type="checkbox" {{$post->checkCategory($category->id)?"checked":""}} name="category[]"--}}
{{--               value="{{$category->id}}"> {{$category->name}} <br>--}}
{{--    @endforeach <br>--}}
{{--    <button type="submit"> Sửa bài viết</button>--}}
{{--    <a href="{{route("posts.index")}}">Quay lại</a>--}}
{{--</form>--}}

{{--</body>--}}
{{--</html>--}}



@extends("backend.layout.master")
@section("title","Chỉnh sửa bài viết")
@section("title-content","Chỉnh sửa bài viết")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf

                    <label for="">Tiêu đề</label> <br>
                    <input type="text" name="title" value="{{$post->title}}">
                    @error('title')
                    <p style="color: red">{{($message)}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea type="text" name="content" class="form-control"
                                  value="{{$post->content}}" rows="5"> </textarea>
                        @error('content')
                        <p style="color: red">{{($message)}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div><br>
                    <label for="">Người viết</label>
                    <select name="user_id">
                        @foreach(\App\Models\User::all() as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                    <p style="color: red">{{($message)}}</p>
                    @enderror
                    <hr>
                    <h4>Thể loại:</h4>
                    @foreach($categories as $category)
                        <label> <input type="checkbox" name="category[]" value="{{$category->id}}"> {{$category->name}}
                        </label>
                        <br>
                    @endforeach <br>
                    <button type="submit" class="btn btn-outline-primary">Lưu</button> &ensp;
                    <a class="btn btn-outline-primary" href="{{route("posts.index")}}">Hủy</a>
                </form>
            </div>
        </div>
    </div>
@endsection

