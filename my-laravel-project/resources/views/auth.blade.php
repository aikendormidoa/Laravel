<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bookify - Authentication</title>
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
        <section id="auth">
            <h2>Account</h2>
            <div class="tabs">
                <div class="tab active">Login</div>
                <div class="tab">Register</div>
            </div>

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST" aria-label="Login form">
                @csrf
                <label for="login-email">Email</label>
                <input type="email" id="login-email" name="email" placeholder="user@example.com" required />

                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="password" placeholder="Enter password" required />

                <button type="submit" class="primary">Login</button>
            </form>

            <hr style="margin:2rem 0; border-color:#ddd;" />

            <!-- Register Form -->
            <form action="{{ route('register') }}" method="POST" aria-label="Register form">
                @csrf
                <label for="register-name">Full Name</label>
                <input type="text" id="register-name" name="name" placeholder="John Doe" required />

                <label for="register-email">Email</label>
                <input type="email" id="register-email" name="email" placeholder="user@example.com" required />

                <label for="register-password">Password</label>
                <input type="password" id="register-password" name="password" placeholder="Create password" required />

                <button type="submit" class="primary">Register</button>
            </form>
        </section>
    </main>

    <footer>
        &copy; 2024 Bookify, All rights reserved.
    </footer>
</body>
</html>