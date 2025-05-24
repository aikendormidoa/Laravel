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
            <a href="#home">Home</a>
            <a href="#auth">Login/Register</a>
            <a href="#events">Events</a>
            <a href="#admin-panel">Admin Panel</a>
            <a href="#booking-section">Booking</a>
        </nav>
    </header>

    <main>
        <!-- Home Page -->
        <section id="home">
            <h2>Welcome to Bookify</h2>
            <p class="lead">Your one-stop platform to book events effortlessly.</p>
            <div class="feature-cards">
                <div class="feature-card">
                    <h3>Easy Event Booking</h3>
                    <p>Find and book events like Birthday Parties, Weddings, Debuts and more in just a few clicks.</p>
                </div>
                <div class="feature-card">
                    <h3>User Friendly</h3>
                    <p>Simple login and registration system for a personalized experience.</p>
                </div>
                <div class="feature-card">
                    <h3>Secure Payments</h3>
                    <p>Integrated secure payment options including PayPal and GCash.</p>
                </div>
            </div>
        </section>

        <!-- Login/Register -->
        <section id="auth">
            <h2>Account</h2>
            <div class="tabs">
                <div class="tab active">Login</div>
                <div class="tab">Register</div>
            </div>

            <!-- Login Form -->
            <form aria-label="Login form">
                <label for="login-email">Email</label>
                <input type="email" id="login-email" placeholder="user@example.com" />

                <label for="login-password">Password</label>
                <input type="password" id="login-password" placeholder="Enter password" />

                <button type="submit" class="primary">Login</button>
            </form>

            <hr style="margin:2rem 0; border-color:#ddd;" />

            <!-- Register Form -->
            <form aria-label="Register form">
                <label for="register-name">Full Name</label>
                <input type="text" id="register-name" placeholder="John Doe" />

                <label for="register-email">Email</label>
                <input type="email" id="register-email" placeholder="user@example.com" />

                <label for="register-password">Password</label>
                <input type="password" id="register-password" placeholder="Create password" />

                <button type="submit" class="primary">Register</button>
            </form>
        </section>

        <!-- Event Listing -->
        <section id="events">
            <h2>Available Events</h2>
            <div id="events-list" class="feature-cards">
                <article class="event-card">
                    <img src="https://images.unsplash.com/photo-1520962918697-7f55a777e8a0?auto=format&fit=crop&w=600&q=80" alt="Birthday Party" />
                    <div class="event-content">
                        <h3>Birthday Party</h3>
                        <p>Celebrate your special day with a fantastic birthday party event.</p>
                        <button>Book Now</button>
                    </div>
                </article>
                <article class="event-card">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Wedding" />
                    <div class="event-content">
                        <h3>Wedding</h3>
                        <p>Make your wedding memorable with beautiful arrangements and more.</p>
                        <button>Book Now</button>
                    </div>
                </article>
                <article class="event-card">
                    <img src="https://images.unsplash.com/photo-1527030280862-64139fba04ca?auto=format&fit=crop&w=600&q=80" alt="Debut" />
                    <div class="event-content">
                        <h3>Debut</h3>
                        <p>Celebrate the milestone of your debut with style and joy.</p>
                        <button>Book Now</button>
                    </div>
                </article>
            </div>
        </section>

        <!-- Admin Panel -->
        <section id="admin-panel">
            <h2>Admin Panel</h2>

            <div class="admin-section">
                <h3>Users</h3>
                <table>
                    <thead>
                        <tr><th>Name</th><th>Email</th><th>Actions</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Admin</td><td>admin@bookify.com</td><td><button>Delete</button></td></tr>
                        <tr><td>John Doe</td><td>john@example.com</td><td><button>Delete</button></td></tr>
                    </tbody>
                </table>
            </div>

            <div class="admin-section">
                <h3>Events</h3>
                <table>
                    <thead>
                        <tr><th>Event Name</th><th>Description</th><th>Actions</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Birthday Party</td><td>Celebrate your special day with a fantastic birthday party event.</td><td><button>Delete</button></td></tr>
                        <tr><td>Wedding</td><td>Make your wedding memorable with beautiful arrangements and more.</td><td><button>Delete</button></td></tr>
                        <tr><td>Debut</td><td>Celebrate the milestone of your debut with style and joy.</td><td><button>Delete</button></td></tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Booking Section -->
        <section id="booking-section">
            <h2>Booking Form</h2>
            <form aria-label="Event booking form">
                <label for="event-select">Select Event</label>
                <select id="event-select" name="event-select">
                    <option>Birthday Party</option>
                    <option>Wedding</option>
                    <option>Debut</option>
                </select>

                <label for="booker-name">Your Full Name</label>
                <input type="text" id="booker-name" name="booker-name" placeholder="Enter your name" />

                <label for="booker-email">Your Email</label>
                <input type="email" id="booker-email" name="booker-email" placeholder="example@domain.com" />

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