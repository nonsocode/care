<?php

namespace App\Http\Controllers;

use App\DriverRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
    	if (Auth::user()->can('manage driver requests')) {
	    	$driverRequests = DriverRequest::orderBy('created_at' , 'desc')->orderBy('id' , 'desc')->with(['lga','driverType'])->take(3)->get();
	    	return view('admin.dashboard', compact('driverRequests'));
    	}
    	return view('admin.dashboard');
    }

    public function requestGraph()
    {
    	// $res = DB::table('driver_requests')
	    // 	->select(
	    // 		DB::raw('date(created_at) as x'),
	    // 		DB::raw('count(*) as y')
    	// 	)->where(
    	// 		DB::raw("date(created_at)"),
    	// 		">",
    	// 		DB::raw("now() - interval 30 day")
    	// 	)
    	// 	->groupBy(
	    // 		DB::raw('day(created_at)')
    	// 	)
    	// 	->orderBy('created_at','asc')
    	// 	->take(30)
    	// 	->get(); 
    	$res = DB::select("select a.Date as x,count(driver_requests.id) as y
			from (
			    select curdate() - INTERVAL (a.a + (10 * b.a) + (100 * c.a)) DAY as Date
			    from (select 0 as a union all select 1 union all select 2 union all select 3 union all select 4 union all select 5 union all select 6 union all select 7 union all select 8 union all select 9) as a
			    cross join (select 0 as a union all select 1 union all select 2 union all select 3 union all select 4 union all select 5 union all select 6 union all select 7 union all select 8 union all select 9) as b
			    cross join (select 0 as a union all select 1 union all select 2 union all select 3 union all select 4 union all select 5 union all select 6 union all select 7 union all select 8 union all select 9) as c
			) a left join driver_requests on date (created_at) = a.date
			 where date(a.date) > now() - interval 30 day group by a.date order by a.date
		 ");


    	return $res;
    }
}
