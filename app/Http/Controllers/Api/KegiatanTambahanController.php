<?php

namespace App\Http\Controllers\Api;

use App\Models\KegiatanTambahan;
use Illuminate\Http\Request;

class KegiatanTambahanController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $kegiatan = KegiatanTambahan::all();
        return response()->json($kegiatan);
    }

    public function show($id)
    {
        $kegiatan = KegiatanTambahan::find($id);

        if (!$kegiatan) {
            return response()->json(['message' => 'Kegiatan not found'], 404);
        }

        return response()->json($kegiatan);
    }
}