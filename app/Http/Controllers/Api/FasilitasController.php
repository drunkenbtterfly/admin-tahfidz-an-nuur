<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    // Method untuk mengambil data fasilitas
    public function index()
    {
        $fasilitas = Fasilitas::all(); // Mengambil semua data fasilitas
        return response()->json($fasilitas); // Mengembalikan dalam format JSON
    }

    // Method untuk mengambil fasilitas berdasarkan ID (opsional)
    public function show($id)
    {
        $fasilitas = Fasilitas::find($id); // Mencari berdasarkan ID
        if ($fasilitas) {
            return response()->json($fasilitas);
        }
        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }
}
