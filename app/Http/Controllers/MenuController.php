<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            "name"=>"required",
            "price"=>"required",
            "description"=>"required",
            "rating"=>"",
            "img"=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $request->file("img");
        $imageName = time() . "_" . $image->getClientOriginalName();
        $image->storeAs("public/images", $imageName);

        Menu::create([
            "name"=>$request->name,
            "price"=>$request->price,
            "description"=>$request->description,
            "rating"=>$request->rating,
            "img"=>$imageName
        ]);
        return back()->with('success', 'Menu added succesfully!');
    }
    public function destroy(Menu $menu)
    {
        // dd($menu);
        $menu->delete();
        return back()->with('success', 'Menu removed succesfully!');
    }
}
