<?php

namespace App\Http\Controllers;

use App\DriverRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	$driverRequests = DriverRequest::latest()->with(['lga','driverType'])->take(3)->get();
    	return view('admin.dashboard', compact('driverRequests'));
    }
}
