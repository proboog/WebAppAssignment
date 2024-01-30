<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventsNUsers;

class EventsNUsersController extends Controller
{   
    //Store new event in database
    public function storeEventsNUsers()
    {
        $events_n_users = new EventsNUsers();

        $events_n_users -> Event_ID = request('Event_ID');
        // $events_n_users -> Event_name = request('Event_name');
        $events_n_users -> user_id = request('user_id');

        
        $events_n_users ->save();
        //Create and save the event
        // $event = Event::create($validatedData);
     
}

}