<?php

namespace App\Http\Controllers;

use App\DriverRequest;
use App\Http\Requests\SmsMessageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.driver-requests.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DriverRequest $driver_request)
    {
    	$driver_request->load('smsMessages.sender');
        return view('admin.driver-requests.show')->with('dr',$driver_request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeMessage(SmsMessageRequest $request, DriverRequest $driver_request)
    {
    	//Send SMS here
    	$sms = Auth::user()->sentSms()->create($request->only('text'));
    	$driver_request->smsMessages()->attach($sms);
    	return $sms->load('sender');
    }
}
