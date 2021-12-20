{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title></title>--}}
{{--</head>--}}
{{--<body>--}}

{{--<a href="{{route("authors.showFormCreate")}}">ADD</a>--}}
{{--<table border="1px">--}}

{{--    <tr>--}}
{{--        <th>ID</th>--}}
{{--        <th>name</th>--}}
{{--        <th>phone</th>--}}
{{--        <th colspan="3">Action</th>--}}
{{--    </tr>--}}

{{--    <tbody>--}}
{{--    @foreach($authors as $author)--}}
{{--        <tr>--}}
{{--            <td>{{ $author->id }}</td>--}}
{{--            <td>{{ $author->name }}</td>--}}
{{--            <td>{{ $author->phone }}</td>--}}
{{--            <td> <a href="{{route("authors.show", $author->id)}}">Detail</a></td>--}}
{{--            <td> <a href="{{route("authors.delete", $author->id)}}">Delete</a></td>--}}
{{--            <td> <a href="{{route("authors.update", $author->id)}}">update</a></td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--</body>--}}
{{--</html>--}}


@extends("backend.layout.master")
@section("title","Author Management")
@section("title-content","Author Management")
@section("Content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Author list</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th colspan="3" style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($authors as $author)
                            <tr>
                                <td>{{ $author->id }}</td>
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->phone }}</td>
                                <td> <a href="{{route("authors.show", $author->id)}}">Detail</a></td>
                                <td> <a href="{{route("authors.delete", $author->id)}}">Delete</a></td>
                                <td> <a href="{{route("authors.update", $author->id)}}">update</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
