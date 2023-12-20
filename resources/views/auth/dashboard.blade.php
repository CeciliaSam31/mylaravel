<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Dashboard</title>
</head>
<body>
    @include('auth/navigation')

    <div class="container">
        <h1>Welcome to the Dashboard</h1>

        <div>
            <a href="{{ route('your-model.index') }}">View All Records</a>
            <a href="{{ route('your-model.create') }}">Create New Record</a>
        </div>

        @if(isset($records) && count($records) > 0)
            <h2>Records</h2>
            <ul>
                @foreach($records as $record)
                    <li>{{ $record->name }} - {{ $record->age }} - {{ $record->sex }} - {{ $record->address }}</li>
                @endforeach
            </ul>
        @else
            <p>No records available.</p>
        @endif

        <!-- Add more sections or links as needed -->
    </div>
</body>
</html>
