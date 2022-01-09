<h3>User:{{$user->name}}</h3>
<table border="1px">
    <h4>Bài viết của tôi:</h4> <a href="{{route("users.index")}}">Quay lại</a>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Email</th>
    </tr>
    @foreach($user->posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$user->email}}</td>
        </tr>
    @endforeach
</table>
