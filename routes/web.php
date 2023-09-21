<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Redirector;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('create');
});

Route::get('/login',function(){
    return view('/login');
})->name('login');

Route::post('/create', function (Request $request) {
    $data = $request->validate([
        'title'=>'required|max:26'
    ]);
    return redirect()->route('login')->with('success','Everthing is good');
})->name('form.store');
