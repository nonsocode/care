<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverRequestsController extends Controller
{
    public function index(){
    	return view('admin.driver-requests');
    }
}
