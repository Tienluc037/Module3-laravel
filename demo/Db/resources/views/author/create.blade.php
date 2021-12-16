<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="phone" placeholder="phone">
    <button type="submit">Add New</button>
    <a href="{{ route("authors.index") }}">Back</a>
</form>
