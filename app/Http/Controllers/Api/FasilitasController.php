<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return response()->json($fasilitas);
    }

    public function show($id)
    {
        $fasilitas = Fasilitas::find($id);
        if ($fasilitas) {
            return response()->json($fasilitas);
        }
        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }
}
