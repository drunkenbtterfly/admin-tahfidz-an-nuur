<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    // Get all Pengurus with their photo URLs
    public function index()
    {
        $penguruses = Pengurus::all()->map(function ($pengurus) {
            return [
                'id' => $pengurus->id,
                'nama' => $pengurus->nama,
                'jabatan' => $pengurus->jabatan,
                'foto_url' => $pengurus->foto ? asset('storage/' . $pengurus->foto) : null,
            ];
        });

        return response()->json($penguruses, 200);
    }

    // Get a single Pengurus with their photo URL
    public function show($id)
    {
        $pengurus = Pengurus::find($id);

        if (!$pengurus) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $data = [
            'id' => $pengurus->id,
            'nama' => $pengurus->nama,
            'jabatan' => $pengurus->jabatan,
            'foto_url' => $pengurus->foto ? asset('storage/' . $pengurus->foto) : null,
        ];

        return response()->json($data, 200);
    }
}
