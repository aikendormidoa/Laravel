<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Display a listing of the events
    public function index()
    {
        $events = Event::all();
        return view('events', compact('events'));
    }

    // Show the form for creating a new event
    public function create()
    {
        return view('create_event');
    }

    // Store a newly created event in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        Event::create($request->all());
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    // Display the specified event
    public function show(Event $event)
    {
        return view('event_detail', compact('event'));
    }

    // Show the form for editing the specified event
    public function edit(Event $event)
    {
        return view('edit_event', compact('event'));
    }

    // Update the specified event in storage
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        $event->update($request->all());
        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    // Remove the specified event from storage
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}