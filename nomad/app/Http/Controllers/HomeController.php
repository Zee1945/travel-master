<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TravelPackages;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $item = TravelPackages::with(['galleries'])->get();
        return view('pages.home', [
            'items' => $item
        ]);
    }
}
