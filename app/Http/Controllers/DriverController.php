<?php

namespace App\Http\Controllers;

use App\DriverRequest as DriverRequestModel;
use App\DriverType;
use App\Http\Requests\DriverRequest;
use App\Lga;
use Illuminate\Http\Request;

class DriverController extends Controller
{
	public function index(){
	    $title = 'Get A Driver';
	    $lgas = Lga::all();
	    $driverTypes = DriverType::all();
	    return view('get-driver',compact('title','lgas','driverTypes'));
	}

    public function saveDriverRequest(DriverRequest $request){
    	DriverRequestModel::create([
    		'name'				=> $request->name,
    		'email'				=> $request->email,
    		'phone'				=> $request->phone,
    		'address'			=> $request->address,
    		'lga_id'			=> $request->lga,
    		'job_description'	=> $request->job_description,
    		'driver_type_id'	=> $request->driver_type,
    		'working_hours'		=> $request->working_hours,
    		'start_date'		=> $request->start_date,
    		'frequency'			=> $request->frequency,
    		'pay'				=> $request->pay,
    		'call_time'			=> $request->call_time,
    		'notes'				=> $request->notes,
		]);
    	return view('home');
    }
}
