<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    public function showDashboard()
    {
        return view('cabinet.dashboard');
    }

    public function showDashboardAccount()
    {
        return view('cabinet.account');
    }

    public function showMyBooking()
    {
        return view('cabinet.my_booking');
    }
}
