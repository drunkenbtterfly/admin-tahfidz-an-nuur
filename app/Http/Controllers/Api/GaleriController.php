<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Galeri;

class GaleriController extends Controller
{
    /**
     * Menampilkan semua data galeri.
     */
    public function index()
{
    $galeri = Galeri::all()->map(function ($item) {
        $item->url = url('storage/' . $item->url);
        return $item;
    });

    return response()->json($galeri, 200);
}


    /**
     * Menampilkan data galeri berdasarkan ID.
     */
    public function show($id)
    {
        $galeri = Galeri::find($id);

        if (!$galeri) {
            return response()->json(['message' => 'Galeri not found'], 404);
        }

        return response()->json($galeri, 200);
    }
}
