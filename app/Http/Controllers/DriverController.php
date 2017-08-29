<?php

namespace App\Http\Controllers;

use App\DriverRequest as DriverRequestModel;
use App\DriverType;
use App\Http\Requests\DriverRequest;
use App\Lga;
use Carbon\Carbon;
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
            'working_hours_start'       => (new Carbon($request->working_hours_start))->format("H:i"),
    		'working_hours_end'		=> (new Carbon($request->working_hours_to))->format("H:i"),
    		'start_date'		=> $request->start_date,
    		'frequency'			=> $request->frequency,
    		'pay'				=> $request->pay,
            'call_time_from'            => (new Carbon($request->call_time_from))->format("H:i"),
    		'call_time_to'			=> (new Carbon($request->call_time_to))->format("H:i"),
    		'notes'				=> $request->notes,
		]);
    	return view('thanks');
    }
}
