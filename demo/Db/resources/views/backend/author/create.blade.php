{{--<a href="{{ route("authors.index") }}">Back</a>--}}
{{--<form action="" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="name" placeholder="name">--}}
{{--    <input type="text" name="phone" placeholder="phone">--}}
{{--    <button type="submit">Add New</button>--}}

{{--</form>--}}
@extends("backend.layout.master")
@section('title-content','ADD NEW AUTHOR')
@section('Content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create</h6>
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nguyễn Văn A">
{{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="31356452">
                </div>
{{--                <div class="form-check">--}}
{{--                    <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                    <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-primary">ADD NEW</button>
                <a href="{{route('authors.index')}}" type="button" class="btn btn-primary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
