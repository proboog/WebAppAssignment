<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    
    public function index()
    {
        $events = Events::all();
        return view('createEvent', compact('events'));
    }

    //show form for creating event
    public function create()
    {
        return view('createEvent');
    }

    //Store new event in database
    public function storeEvent()
    {
        $events = new Events();

        $events -> Event_name = request('Event_name');
        $events -> Event_description = request('Event_description');
        $events -> Type_of_event = request('Type_of_event');
        $events -> Date_and_time = request('Date_and_time');
        $events -> Venue = request('Address');
        $events -> Venue = request('City');
        $events -> Venue = request('Province');
        $events -> Venue = request('Postal Code');
        $events -> Venue = request('Country');
        $events -> Organizer_name = request('Organizer_name');
        $events -> Contact = request('Contact');
        
        $events ->save();
        //Create and save the event
        // $event = Event::create($validatedData);

        return redirect()->route('createEvent')->with('success', 'Event created successfully');

     
}

}

