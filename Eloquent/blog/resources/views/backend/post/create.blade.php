@extends("backend.layout.master")
@section("title","Thêm bài viết mới")
@section("title-content","Thêm bài viết")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="post">
                    @csrf

                    <label for="">Tiêu đề</label> <br>
                    <input type="text" name="title" value="{{old("title")}}">
                    @error('title')
                    <p style="color: red">{{($message)}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="">Nội dung</label>
                        <textarea type="text" name="content" class="form-control"
                                  value="{{old("content")}}" rows="5"> </textarea>
                        @error('content')
                        <p style="color: red">{{($message)}}</p>
                        @enderror
                    </div>
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
                    {{--                            <button type="submit">Đăng</button>--}}
                    <button type="submit" class="btn btn-outline-primary">Đăng bài</button> &ensp;
                    <a class="btn btn-outline-primary" href="{{route("posts.index")}}">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
@endsection
