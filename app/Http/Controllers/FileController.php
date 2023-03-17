<?php

namespace App\Http\Controllers;
use App\Models\File;
use Illuminate\Http\Request;



class FileController extends Controller
{
    public function index(){
        $ficheros = File::all();
        return view('files',['ficheros'=>$ficheros]);


    }
    public function store(Request $request){
        return $request->all();
        //$name = $request->file('file')->getClientOriginalName();

        //$path = $request->file('file')->store('public/files');
        //$array = explode('public',$path);
        

        //$save = new File;

        //$save->name = $name;
        //$save->path = 'storage'.$array[1];

        //return redirect('files')->with('status', 'File Has been uploaded successfully in laravel');
    }
}
