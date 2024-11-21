<?php
namespace App\Http\Controllers;

use App\Models\Subido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ImageController extends Controller
{
    public function image(Request $request, $id)
    {
        $subido = Subido::find($id);
        if ($subido && file_exists(storage_path('app/private/ejercicio/' . $subido->nombre))) {
            return response()->file(storage_path('app/private/ejercicio/' . $subido->nombre));
        }
        abort(404);
    }

    public function imageDB(Request $request, $id)
    {
        $subido = Subido::find($id);
        if ($subido) {
            $imagePath = storage_path('app/private/ejercicio/' . $subido->nombre);
            if (file_exists($imagePath)) {
                $imageContent = file_get_contents($imagePath);
                $response = Response::make($imageContent, 200);
                $response->header('Content-Type', mime_content_type($imagePath));
                return $response;
            }
        }
        abort(404);
    }
}