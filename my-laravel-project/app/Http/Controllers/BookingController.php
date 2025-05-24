<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('booking', compact('bookings'));
    }

    public function create()
    {
        $events = Event::all();
        return view('booking.create', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'booker_name' => 'required|string|max:255',
            'booker_email' => 'required|email|max:255',
        ]);

        Booking::create([
            'event_id' => $request->event_id,
            'booker_name' => $request->booker_name,
            'booker_email' => $request->booker_email,
        ]);

        return redirect()->route('booking.index')->with('success', 'Booking created successfully.');
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.show', compact('booking'));
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $events = Event::all();
        return view('booking.edit', compact('booking', 'events'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'booker_name' => 'required|string|max:255',
            'booker_email' => 'required|email|max:255',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update([
            'event_id' => $request->event_id,
            'booker_name' => $request->booker_name,
            'booker_email' => $request->booker_email,
        ]);

        return redirect()->route('booking.index')->with('success', 'Booking updated successfully.');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('booking.index')->with('success', 'Booking deleted successfully.');
    }
}