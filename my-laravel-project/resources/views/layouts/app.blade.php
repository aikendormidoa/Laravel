<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bookify - Event Booking</title>
    <link rel="stylesheet" href="{{ asset('css/bookify.css') }}">
</head>
<body>
    <header>
        <h1>Bookify</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('auth') }}">Login/Register</a>
            <a href="{{ route('events') }}">Events</a>
            <a href="{{ route('admin') }}">Admin Panel</a>
            <a href="{{ route('booking') }}">Booking</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2024 Bookify, All rights reserved.
    </footer>
</body>
</html>