<a href="{{ route("author.index") }}">Back</a>
<table border="1px">
    <theard>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>phone</th>
        </tr>
    </theard>
    <tbody>
    <tr>
        <td>{{ $author->id }}</td>
        <td>{{ $author->name }}</td>
        <td>{{ $author->phone }}</td>
    </tr>
    </tbody>
</table>
