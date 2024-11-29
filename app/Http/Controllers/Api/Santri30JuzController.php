<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Santri30Juz;
use Illuminate\Http\Request;

class Santri30JuzController extends Controller
{
    // Menampilkan semua data santri
    public function index()
    {
        return response()->json(Santri30Juz::all());
    }

    // Menampilkan data santri berdasarkan ID
    public function show($id)
    {
        $santri = Santri30Juz::find($id);

        if (!$santri) {
            return response()->json(['message' => 'Santri not found'], 404);
        }

        return response()->json($santri);
    }

    // Menambahkan data santri baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'asal' => 'required|string|max:255',
        ]);

        $santri = Santri30Juz::create($request->all());

        return response()->json($santri, 201);
    }

    // Memperbarui data santri berdasarkan ID
    public function update(Request $request, $id)
    {
        $santri = Santri30Juz::find($id);

        if (!$santri) {
            return response()->json(['message' => 'Santri not found'], 404);
        }

        $santri->update($request->all());

        return response()->json($santri);
    }

    // Menghapus data santri berdasarkan ID
    public function destroy($id)
    {
        $santri = Santri30Juz::find($id);

        if (!$santri) {
            return response()->json(['message' => 'Santri not found'], 404);
        }

        $santri->delete();

        return response()->json(['message' => 'Santri deleted successfully']);
    }
}
