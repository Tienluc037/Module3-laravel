@extends("backend.layout.master")
@section("title","Post")
@section("title-content","Bài viết")
@section("content")
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @toastr_css
</head>
<body>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a href="{{route("posts.create")}}" style="color: #5d5987">Thêm
                bài viết</a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: #32737ceb">
                <thead>
                <tr style="color: #524b8cd9">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Category</th>
                    <th>User</th>
                    <th colspan="3" style="text-align: center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>

                        <td>
                            @if(count($post->categories) > 0)
                                @foreach($post->categories as $category)
                                    <p>{{$category->name}}</p>
                                @endforeach
                            @else
                                <p>Chưa phân loại</p>
                            @endif
                        </td>
                        <td>{{$post->user->name}}</td>
                        <td>
                            <button class="btn btn-outline-primary"><a
                                    href="{{route("posts.addToFavorite",$post->id)}}"><i class="far fa-heart"
                                                                                         style="color: #b981b4"></i></a>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-outline-primary"><a href="{{route("posts.edit",$post->id)}}"><i
                                        class="fas fa-user-edit" style="color: #b981b4"></i></a></button>
                        </td>
                        <td>
                            <button class="btn btn-outline-primary"><a href="{{route("posts.destroy",$post->id)}}"
                                                                       onclick="confirm('Bạn có muốn xóa không?')"><i
                                        class="fas fa-trash-alt" style="color: #b981b4"></i></a></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
</body>
@jquery
@toastr_js
@toastr_render
</html>

