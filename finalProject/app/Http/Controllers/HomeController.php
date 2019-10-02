<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Hall;
use App\Storage;
use App\offer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home')->with('category' ,Category::all())
                                 ->with('hall', HAll::all())
                                 ->with('storage', Storage::all())
                                 ->with('offer', offer::all());
    }
}
