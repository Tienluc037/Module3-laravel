<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">--}}
    @toastr_css
</head>
<body>
<form action="" method="post">
    @csrf

    <input type="text" name="title" placeholder="Tiêu đề" value="{{old("title")}}">
    @error('title')
    <p style="color: red">{{($message)}}</p>
    @enderror

    <input type="text" name="content" placeholder="Nội dung" value="{{old("content")}}">
    @error('content')
    <p style="color: red">{{($message)}}</p>
    @enderror

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
        <input type="checkbox" name="category[]" value="{{$category->id}}"> {{$category->name}} <br>
    @endforeach <br>
    <button type="submit"> Thêm bài viết</button>
    <a href="{{route("posts.index")}}">Quay lại</a>
</form>
@jquery
@toastr_js
@toastr_render
</body>
</html>
