<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{


    public function store(Request $request)
    {

        $data = [
            "name" => $request->title,
            "dateStart" => $request->dateStart,
            "timeStart" => $request->timeStart,
            "timeEnd" => $request->timeEnd,
            "zone_id" => $request->zone_id
        ];
        
        
        Calendar::create($data);


        return back();
    }



    public function show(Calendar $calendar)
    {
        $events = Calendar::all()->map(function (Calendar $event) {
            $start = $event->dateStart . " " . $event->timeStart;
            $end = $event->dateEnd . " " . $event->timeEnd;
            
            return [
                "start" => $start,
                "end" => $end,
                "title" => $event->name,
                "color" => "#2c3576",
            ];
        });
        
        return response()->json([
            "events" => $events
        ]);
    }
}
