<?php

namespace testing\Http\Controllers;

use App\QueryCostomer;

// use app\QueryCostomer;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class SymtompController extends Controller
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show(){

    	// $Doctors = QueryCostomer::all();

    	// $Symptom = DB::table('History')->get();

		$Symptom = DB::table('Member')
		        ->leftJoin('History', 'Member.id', '=', 'History.member_id')
		        ->get();

    	return view('Symptom', ['Symptom' => $Symptom]);
    	// echo "llol";

    }


}