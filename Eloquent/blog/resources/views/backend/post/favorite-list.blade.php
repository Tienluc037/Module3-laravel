{{--{{dd($bookmark)}}--}}

@extends("backend.layout.master")
@section("title","post")
@section("title-content","favorite")
@section("content")
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
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a style="color: #524b8cd9">Bài viết yêu thích</a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr style="color: #524b8cd9">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Quantity</th>
                    <th style="text-align: center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{$book['id']}}</td>
                        <td>{{$book['title']}}</td>
                        <td>{{$book['content']}}</td>
                        <td>{{$book['quantity']}}</td>

                        <td><a href="{{route("posts.deleteFavorite",$book["id"])}}" onclick="confirm('Bạn có muốn xóa không?')">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
</body>
</html>

