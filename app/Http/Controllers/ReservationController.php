<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index() {
        $tables = Zone::all();
        return view("reservation.reservation",compact("tables"));
    }
}
