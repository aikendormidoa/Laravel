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
    <a href="{{ route('events') }}">Events</a>
    <a href="{{ route('booking') }}">Book</a>
    <a href="{{ route('admin') }}">Admin</a>
  </nav>
</header>

<main>
  <!-- Home Page -->
  <section id="home">
    <!-- Add home content here -->
  </section>

  <!-- Login/Register -->
  <section id="auth">
    <!-- Add auth forms here -->
  </section>

  <!-- Event Listing -->
  <section id="events">
    <!-- Add event listing here -->
  </section>

  <!-- Admin Panel -->
  <section id="admin-panel">
    <h2>Manage Users</h2>
    <div class="admin-section">
      <h3>Users</h3>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <form action="{{ route('admin.deleteUser', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <h2>Manage Events</h2>
    <div class="admin-section">
      <h3>Events</h3>
      <table>
        <thead>
          <tr>
            <th>Event Name</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($events as $event)
          <tr>
            <td>{{ $event->name }}</td>
            <td>{{ $event->description }}</td>
            <td>
              <form action="{{ route('admin.deleteEvent', $event->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>

  <!-- Booking Section -->
  <section id="booking-section">
    <!-- Add booking form here -->
  </section>
</main>

<footer>
  &copy; 2024 Bookify, All rights reserved.
</footer>
</body>
</html>