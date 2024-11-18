<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\SubirControlador;
use Illuminate\Http\Request;

class SubirControlador extends Controller
{
    function img(Request $request, $file){
        // dd($file)
        if(file_exits(storage_path('app/private/carpeta/') . $file)){
        return response()->file(storage_path('app/private/carpeta/') . $file);
        }
        abort(404);
    }

    function index () {
        return view('subir.index');
    }
    
    function subir (Request $request) {
        //dd($request->file('file'))
        if($request->hasFile('file') && $request->file('file')->isvalid()){
            $file = $request->file('file');
            $nombreOriginal = $file->getClientOriginalName();
            
            $path = $file->storeAs('carpeta', 'nueva_' . $nombreOriginal);
            // Equivalente al de arriba pero guarda en la privada
            // $path = Storage::putFileAs('carpeta', $file, $nombreOriginal );

            // $file->move('storage/carpeta',$nombreOriginal);
            
            echo $path;

        }
    }
    function subir2 (Request $request) {
        //dd($request->file('file'))
        if($request->hasFile('file') && $request->file('file')->isvalid()){
            $file = $request->file('file');
            // $nombreOriginal = $file->getClientOriginalName();
            $path = $file->store('carpeta', 'public');
            // $path= Storage::putFile('carpeta', $file);
            // $file->move('storage/carpeta',$nombreOriginal);
            echo $path;

        }
    }
    function subir1 (Request $request) {
        //dd($request->file('file'))
        if($request->hasFile('file') && $request->file('file')->isvalid()){
            $file = $request->file('file');
            $nombreOriginal = $file->getClientOriginalName();
            $path = $file->move('storage/carpeta',$nombreOriginal);
            echo $path;
        }
    }
    function view() {
        return view('subir.view');
    }
}
