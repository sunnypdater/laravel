<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
	return view('login');
});

// Route::get('/doctor', function () {
// 	return view('doctor');
// });

Route::get('/staff', 'StaffController@show');

Route::get('/Symptom', 'SymtompController@show');

Route::get('/staffView', function () {
	return view('staffView');
});


Route::get('/staffHistory', function () {
	return view('staffHistory');
});

Route::get('/history', 'HistoryController@show');


// Route::get('/CostomerView', function () {
// 	return view('CostomerView');
// });

Route::get('/SymptomEdit', function () {
	return view('SymptomEdit');
});

Route::post('/loginCK', function () {
	echo "Helloolol";
});

Route::post('/regisCK', function () {
	echo "Reeeeaasasas";
});

Route::get('/CostomerView', 'CustomerViewController@show');

Route::get('/doctor', 'CustomerViewController@show');


