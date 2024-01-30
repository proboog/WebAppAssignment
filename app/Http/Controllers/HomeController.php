<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventsNUsers; // Import the EventsNUsers model
use App\Models\Events;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Retrieve the user ID
        $userId = auth()->user()->id;

        // Retrieve the records from events_n_users table for the current user
        $userEventsRecords = EventsNUsers::get();

        // Initialize an empty array to store the event IDs
        $joinedEventIds = [];

        // Iterate over each record to extract event IDs
        foreach ($userEventsRecords as $userEventsRecord) {
            // Split the user_id string by comma to get an array of user IDs
            $userIds = explode(',', $userEventsRecord->user_id);

            // Check if the desired user ID exists in the array of user IDs
            if (in_array($userId, $userIds)) {
                // If the user ID exists, extract the associated event IDs
                $joinedEventIds[] = $userEventsRecord->Event_ID;
            }
        }

        // Retrieve the events associated with the event IDs
        $joinedEvents = Events::whereIn('Event_ID', $joinedEventIds)->get();

        // Pass the joined events data to the view
        return view('home', compact('joinedEvents'));
        // // Retrieve the user ID
        // $userId = auth()->user()->id;

        // // Retrieve the records from events_n_users table for the current user
        // $userEventsRecords = EventsNUsers::where('user_id', $userId)->get();
        // print($userEventsRecords);
        // echo "on the command line";

        // // Initialize an empty array to store the event IDs
        // $joinedEventIds = [];

        // // Iterate over each record to extract event IDs
        // foreach ($userEventsRecords as $userEventsRecord) {
        //     // Split the user_id string by comma to get an array of user IDs
        //     $userIds = explode(',', $userEventsRecord->user_id);

        //     // Check if the desired user ID exists in the array of user IDs
        //     if (in_array($userId, $userIds)) {
        //         // If the user ID exists, extract the associated event IDs
        //         $joinedEventIds = array_merge($joinedEventIds, explode(',', $userEventsRecord->Event_ID));
        //     }
        // }

        // // Remove duplicate event IDs
        // $joinedEventIds = array_unique($joinedEventIds);

        // // Retrieve the events associated with the event IDs
        // $joinedEvents = Events::whereIn('Event_ID', $joinedEventIds)->get();

        // // Pass the joined events data to the view
        // return view('home', compact('joinedEvents'));
    }
}
