<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bookify - Booking</title>
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
        <section id="booking-section">
            <h2>Booking Form</h2>
            <form action="{{ route('booking.store') }}" method="POST" aria-label="Event booking form">
                @csrf
                <label for="event-select">Select Event</label>
                <select id="event-select" name="event_id">
                    <option value="1">Birthday Party</option>
                    <option value="2">Wedding</option>
                    <option value="3">Debut</option>
                </select>

                <label for="booker-name">Your Full Name</label>
                <input type="text" id="booker-name" name="booker_name" placeholder="Enter your name" required />

                <label for="booker-email">Your Email</label>
                <input type="email" id="booker-email" name="booker_email" placeholder="example@domain.com" required />

                <label>Payment Method</label>
                <div class="payment-options">
                    <div class="payment-option selected">PayPal</div>
                    <div class="payment-option">GCash</div>
                </div>

                <button type="submit" class="primary">Confirm Booking &amp; Pay</button>
            </form>
        </section>
    </main>

    <footer>
        &copy; 2024 Bookify, All rights reserved.
    </footer>
</body>
</html>