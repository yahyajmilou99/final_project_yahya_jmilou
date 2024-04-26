<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view("admin.admin",compact("menus"));
    }
}
