<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function show(Request $request, Event $event)
    {
        return $event;
    }
}
