<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventManageController extends Controller
{
    public function eventManage()
    {
        $events = Events::all();
        return view('eventManage', ['events' => $events]);
    }

    public function deleteEvent($id)
    {
        $event = Events::findOrFail($id);
        $event->delete();

        return redirect()->route('eventManage')->with('success', 'Event deleted successfully');
    }
}
