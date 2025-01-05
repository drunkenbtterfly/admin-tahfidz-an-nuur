<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
{
    $galeri = Galeri::all()->map(function ($item) {
        $item->url = url('storage/' . $item->url);
        return $item;
    });

    return response()->json($galeri, 200);
}

    public function show($id)
    {
        $galeri = Galeri::find($id);

        if (!$galeri) {
            return response()->json(['message' => 'Galeri not found'], 404);
        }

        $galeri->url = url('storage/' . $galeri->url);

        return response()->json($galeri, 200);
    }
}
