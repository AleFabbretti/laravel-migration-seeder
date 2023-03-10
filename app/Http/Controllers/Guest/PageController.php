<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = train::whereDate('departure_time', date('y-m-d'))->get();

        return view('homepage', compact('trains'));
    }
}
