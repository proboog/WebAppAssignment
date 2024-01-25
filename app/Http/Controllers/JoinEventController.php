<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class JoinEventController extends Controller
{
    public function joinEvent()
    {
        $events = Events::all();
        return view('joinEvent',['events'=> $events]);
    }
}
