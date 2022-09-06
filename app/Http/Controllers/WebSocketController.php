<?php

namespace App\Http\Controllers;

use App\Events\Click;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class WebSocketController extends Controller
{
    public function index(Request $request){
        Event::dispatch(new Click($request->message, 1));
        return view('websocket');
    }
}
