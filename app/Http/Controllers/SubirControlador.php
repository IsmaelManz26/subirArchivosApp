<?php
namespace App\Http\Controllers;

use App\Models\Subido;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubirControlador extends Controller
{
    public function index()
    {
        $subidos = Subido::all();
        if ($subidos->isEmpty()) {
            return redirect()->route('subir.create');
        }
        return view('subir.index', compact('subidos'));
    }

    public function viewAll()
    {
        $subidos = Subido::orderBy('nombre')->get();
        return view('subir.viewAll', compact('subidos'));
    }

    public function viewOne($id)
    {
        $subido = Subido::findOrFail($id);
        $filePath = storage_path('app/private/ejercicio/' . $subido->nombre);
    
        if (!file_exists($filePath)) {
            return back()->withErrors(['file' => 'El archivo no existe en el almacenamiento']);
        }
    
        return view('subir.viewOne', compact('subido'));
    }

    public function create()
    {
        return view('subir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $file = $request->file('file');
            $nombreOriginal = $file->getClientOriginalName();
            $nombre = Carbon::now()->format('Y_m_d_H_i_s') . '_' . $nombreOriginal;
            $path = $file->storeAs('private/ejercicio', $nombre);
    
            Subido::create([
                'nombre_original' => $nombreOriginal,
                'nombre' => $nombre,
            ]);
    
            return redirect()->route('subir.viewAll');
        }
    
        return back()->withErrors(['file' => 'Error al subir el archivo']);
    }

        public function manage()
        {
            $subidos = Subido::orderBy('nombre')->get();
            return view('subir.manage', compact('subidos'));
        }
        
        public function destroy($id)
        {
            $subido = Subido::findOrFail($id);
            $filePath = 'private/ejercicio/' . $subido->nombre;
        
            // Eliminar el archivo del almacenamiento
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        
            // Eliminar el registro de la base de datos
            $subido->delete();
        
            return redirect()->route('subir.manage')->with('success', 'Foto eliminada correctamente');
        }
}