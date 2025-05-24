<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bookify - Available Events</title>
    <link rel="stylesheet" href="{{ asset('css/bookify.css') }}">
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <main>
        <section id="events">
            <h2>Available Events</h2>
            <div id="events-list" class="feature-cards">
                @foreach($events as $event)
                <article class="event-card">
                    <img src="{{ $event->image_url ?? asset('images/default-event.jpg') }}" alt="{{ $event->name }}" />
                    <div class="event-content">
                        <h3>{{ $event->name }}</h3>
                        <p>{{ $event->description }}</p>
                        <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('F d, Y') }}</p>
                        <p><strong>Location:</strong> {{ $event->location }}</p>
                        <button onclick="location.href='{{ route('booking.show', $event->id) }}'">Book Now</button>
                    </div>
                </article>
                @endforeach
            </div>
        </section>
    </main>
    @endsection
</body>
</html>