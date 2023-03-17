<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\MaestroController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\FileController;

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
Auth::routes();
Route::get('/', function () {
   return view('welcome');
});
Route::get('login', function() {

    return view('login');

    
});

Route::post('login', function(Request $request) {

    $user = $request->input('user');
    $encontrado = User::where('name', $user)->first();
    if(is_null($encontrado)){
       // return "EL USUARIO NO EXISTE";
       return redirect()->back();
    }else{

        $clave_dieron = $request->input('password');
        $clave_guardada = $encontrado->password;

        if(Hash::check($clave_dieron,$clave_guardada)){
            Auth::login($encontrado);
            
            //return "INICIO";
            return redirect('inicio');

        }else{
            //return "LA CLAVE ES INCORRECTA";
            return redirect()->back();
            
        }
    }


});
Route::get('inicio',function(){

    return view('bienvenida');

})->name('HOME');
;
//Route::get('files', [FileController::class,'index']);
//Route::post('files/store', [FileController::class,'store'])->name('files.store');
$controller_path = 'use App\Http\Controllers';

Route::get('files', $controller_path. '\FileController@index')->name('files');
Route::post('files/store', $controller_path. '\FileController@store')->name('files.store');


Route::middleware(['auth'])->group(function() {
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //Route::get('maestros', [MaestroController::class,'index'])->name('maestros.index');
    Route::resource('maestros', MaestroController::class);
    Route::resource('alumnos', AlumnoController::class);
    //Route::get('maestros/create',[MaestroController::class,'create'])->name('maestros.create');
    //Route::get('maestros/show',[MaestroController::class, 'show'])->name('maestros.show');
    //Route::get('maestros/edit',[MaestroController::class, 'edit'])->name('maestros.edit');
    //Route::get('maestros/update',[MaestroController::class, 'update'])->name('maestros.update');
    //Route::post('maestros/store',[MaestroController::class, 'store'])->name('maestros.store');
    //Route::delete('maestros/destroy',[MaestroController::class, 'destroy'])->name('maestros.destroy');


});
