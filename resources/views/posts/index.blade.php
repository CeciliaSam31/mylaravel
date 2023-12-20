<!-- resources/views/crud/index.blade.php -->
<h1>CRUD Records</h1>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $record)
            <tr>
                <td>{{ $record->Name }}</td>
                <td>{{ $record->Age }}</td>
                <td>{{ $record->Sex }}</td>
                <td>{{ $record->Address }}</td>
                <td>
                    <a href="{{ route('your-model.show', $record->id) }}">View</a>
                    <a href="{{ route('your-model.edit', $record->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('your-model.create') }}">Create New Record</a>
