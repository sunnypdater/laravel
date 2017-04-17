<?php

namespace testing\Http\Controllers;

use App\QueryCostomer;

// use app\QueryCostomer;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class StaffController extends Controller
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show(){

    	// $Doctors = QueryCostomer::all();

    	$Staffs = DB::table('Staff')->get();


    	return view('staff', ['Staffs' => $Staffs]);
    	// echo "llol";

    }


}