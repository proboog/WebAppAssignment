<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\EventsNUsers;
use Illuminate\Support\Facades\Log;
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
        $userId = Auth::user()->user_id;
        $events_n_users = new EventsNUsers();

        $events_n_users->Event_ID = $eventID; // Assign the Event_ID
        // $events_n_users -> Event_name = request('Event_name');
        $events_n_users -> user_id = $userId;


        $events_n_users ->save();


        //Create and save the event
        // $event = Event::create($validatedData);

        return redirect()->route('createEvent')->with('success', 'Event created successfully');

     
    }
    public function editEvent()
    {
        $userName = auth()->user()->name;
        $events = Events::where('Organizer_name', $userName)->get();

        return view('editEvent', ['events' => $events]);
    }

    public function displayEditEventForm($id)
    {
        $event = Events::find($id);

        return view('editEventForm', ['event' => $event]);
    }

    public function updateEvent(Request $request, $id)
    {
        $event = Events::find($id);
        $request->validate([
            'Event_name' => 'required|string|max:255',
            'Event_description' => 'required|string|max:255',
            'Type_of_event' => 'required|string|max:255',
            'Date_and_time' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'City' => 'required|string|max:255',
            'State_Province' => 'required|string|max:255',
            'Zip_Postal_code' => 'required|integer',
            'Country' => 'required|string|max:255',
            'Organizer_name' => 'required|string|max:255',
            'Contact' => 'required|string|max:255',
        ]);
        
        $updateData = [
            'Event_name' => $request->input('Event_name'),
            'Event_description' => $request->input('Event_description'),
            'Type_of_event' => $request->input('Type_of_event'),
            'Date_and_time' => $request->input('Date_and_time'),
            'Address' => $request->input('Address'),
            'City' => $request->input('City'),
            'State_Province' => $request->input('State_Province'),
            'Zip_Postal_Code' => $request->input('Zip_Postal_Code'),
            'Country' => $request->input('Country'),
            'Organizer_name' => $request->input('Organizer_name'),
            'Contact' => $request->input('Contact'),
        ];

        // $event->Event_name = $request->input('Event_name');
        // $event->Event_description = $request->input('Event_description');
        // $event->Type_of_event = $request->input('Type_of_event');
        // $event->Date_and_time = $request->input('Date_and_time');
        // $event->Address = $request->input('Address');
        // $event->City = $request->input('City');
        // $event->State_Province = $request->input('State_Province');
        // $event->Zip_Postal_code = $request->input('Zip_Postal_code');
        // $event->Country = $request->input('Country');
        // $event->Organizer_name = $request->input('Organizer_name');
        // $event->Contact = $request->input('Contact');
        $event->update($updateData);
    
        return redirect()->back()->with('success', 'Event updated successfully');
    }


    public function showUserEvents()
    {
    $userName = auth()->user()->name;
    $events = Events::where('Organizer_name', $userName)->get();

    return view('your.view.name', ['events' => $events]);
    }

    public function showsysmessage() {
        return view('debug', ['gg' => phpinfo()]);
    }
}

