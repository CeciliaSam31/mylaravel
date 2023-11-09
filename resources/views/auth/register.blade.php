
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
@include('auth/navigation')
    <div class="registration-container">
        <div class="registration-box">
            <h1>Registration</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" required>

                <label for="email">Email</label>
                <input type="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" required>

                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
