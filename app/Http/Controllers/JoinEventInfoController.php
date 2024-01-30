<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Events;
use App\Models\EventsNUsers; // Add this line
use Illuminate\Support\Facades\Auth; // Add this line

class JoinEventInfoController extends Controller
{
    public function joinEventInfo(Request $request) {
        $eventId = $request->input('eventId');
        // Retrieve event details based on $eventID from your database
        $events = Events::find($eventId);
        return view('joinEventInfo', ['events' => $events]);
    }

    public function saveUsers2Events(Request $request){
        $eventId = $request->input('eventId');
        $userId = Auth::user()->id;

        // Check if the user is already associated with the event
        $existingRecord = EventsNUsers::where('Event_ID', $eventId)->first();

        if ($existingRecord) {
            // Retrieve the existing user IDs
            $userIds = explode(',', $existingRecord->user_id);
            
            // Check if the user ID is already in the list
            if (in_array($userId, $userIds)) {
                // User has already joined, redirect back with error message
                return redirect()->back()->with('error', 'You have already joined this event!');
            }

            // Append the new user ID
            $userIds[] = $userId;

            // Update the user_id field with the updated list of user IDs
            EventsNUsers::where('Event_ID', $eventId)->update(['user_id' => implode(',', $userIds)]);
        } else {
            // Create a new record if no existing record found
            EventsNUsers::create([
                'Event_ID' => $eventId,
                'user_id' => $userId
            ]);
        }

        return redirect()->route('joinEventInfo', ['eventId' => $eventId])->with('success', 'You have joined the event!');
        }
    // // Check if the current user has already joined this event
    // $alreadyJoined = EventsNUsers::where('Event_ID', $eventId)
    //                               ->where('user_id', $userId)
    //                               ->exists();

    // // If the user has already joined, show a notification
    // if ($alreadyJoined) {
    //     return redirect()->back()->with('error', 'You have already joined this event!');
    // }

    // // Find the record in the EventsNUsers table by Event_ID
    // // Update the user_id field where Event_ID matches $eventId
    // EventsNUsers::where('Event_ID', $eventId)->update(['user_id' => $userId]);

    
    // return redirect()->back()->with('success', 'You have joined the event!');

}

