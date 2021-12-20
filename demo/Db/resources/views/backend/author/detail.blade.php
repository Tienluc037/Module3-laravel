{{--<a href="{{ route("authors.index") }}">Back</a>--}}
{{--<table border="1px">--}}
{{--    <theard>--}}
{{--        <tr>--}}
{{--            <th>ID</th>--}}
{{--            <th>Name</th>--}}
{{--            <th>phone</th>--}}
{{--        </tr>--}}
{{--    </theard>--}}
{{--    <tbody>--}}
{{--    <tr>--}}
{{--        <td>{{ $author->id }}</td>--}}
{{--        <td>{{ $author->name }}</td>--}}
{{--        <td>{{ $author->phone }}</td>--}}
{{--    </tr>--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--{{dd($author)}}--}}
{{--<h1>{{$author->name}}</h1>--}}
{{--<p>{{$author->phone}}</p>--}}


@extends("backend.layout.master")
@section('title-content','Detail')
@section('Content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nguyễn Văn A" value="{{ $author->name }}" readonly>
                    {{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="31356452" value=" {{ $author->phone }}" readonly>
                </div>
                <a href="{{route('authors.index')}}" type="button" class="btn btn-primary">Back</a>
            </form>
        </div>
    </div>
@endsection

