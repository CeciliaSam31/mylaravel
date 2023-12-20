<!-- resources/views/crud/edit.blade.php -->
<h1>Edit Record</h1>

<form method="post" action="{{ route('your-model.update', $item->id) }}">
    @csrf
    @method('PUT')
    <!-- Include your form fields with current values -->
    <button type="submit">Update Record</button>
</form>

<a href="{{ route('your-model.index') }}">Back to Records</a>
