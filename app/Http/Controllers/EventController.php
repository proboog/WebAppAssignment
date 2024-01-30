<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\EventsNUsers;
use Illuminate\Support\Facades\Auth; // Add this line

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
        $events -> Address = request('Address');
        $events -> City = request('City');
        $events -> State_Province = request('State_Province');
        $events -> Zip_Postal_code = request('Zip_Postal_Code');
        $events -> Country= request('Country');
        $events -> Organizer_name = request('Organizer_name');
        $events -> Contact = request('Contact');
        
        $events ->save();

        // Retrieve the Event_ID after saving the event
        // Simultaneously creating event n user table 
        $eventID = $events->Event_ID;
        $userId = Auth::user()->id;
        $events_n_users = new EventsNUsers();

        $events_n_users->Event_ID = $eventID; // Assign the Event_ID
        // $events_n_users -> Event_name = request('Event_name');
        $events_n_users -> user_id = $userId;


        $events_n_users ->save();


        //Create and save the event
        // $event = Event::create($validatedData);

        return redirect()->route('createEvent')->with('success', 'Event created successfully');

     
}

}

