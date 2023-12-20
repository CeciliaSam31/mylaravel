<!-- resources/views/crud/create.blade.php -->
<h1>Create New Record</h1>

<form method="post" action="{{ route('your-model.store') }}">
    @csrf
    <!-- Include your form fields here -->
    <button type="submit">Save Record</button>
</form>

<a href="{{ route('your-model.index') }}">Back to Records</a>
