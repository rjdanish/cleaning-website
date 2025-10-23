<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function hotel()
    {
        return view('services.hotel');
    }

    public function apartment()
    {
        return view('services.apartment');
    }

    public function office()
    {
        return view('services.office');
    }

    public function industrial()
    {
        return view('services.industrial');
    }
}
