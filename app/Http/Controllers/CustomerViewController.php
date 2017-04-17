<?php

namespace testing\Http\Controllers;

use App\QueryCostomer;

// use app\QueryCostomer;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class CustomerViewController extends Controller
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show(){

    	// $Doctors = QueryCostomer::all();

    	$Doctors = DB::table('Doctor')->get();


    	return view('CostomerView', ['Doctors' => $Doctors]);
    	// echo "llol";

    }


}