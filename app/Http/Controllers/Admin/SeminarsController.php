<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeminarsController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.seminars');
    }

    public function ticket_verifier(Request $request)
    {
        return view('admin.ticket');
    }

    public function all_bookings(Request $request)
    {
        return view('admin.bookings');
    }
}
