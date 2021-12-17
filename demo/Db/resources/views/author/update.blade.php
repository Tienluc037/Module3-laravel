<a href="{{ route("authors.index") }}">Back</a>
<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="name" value="{{ $author->name }}">
    <input type="text" name="phone" placeholder="phone" value="{{$author->phone}}">
    <button type="submit">Add New</button>

</form>

