<!-- resources/views/crud/show.blade.php -->
<h1>View Record</h1>

<!-- Display the details of the record -->
<p>Name: {{ $item->Name }}</p>
<p>Age: {{ $item->Age }}</p>
<p>Sex: {{ $item->Sex }}</p>
<p>Address: {{ $item->Address }}</p>

<a href="{{ route('your-model.index') }}">Back to Records</a>
