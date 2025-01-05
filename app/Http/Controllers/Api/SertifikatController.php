<?php

namespace App\Http\Controllers\Api;

use App\Models\Sertifikat;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SertifikatController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $sertifikats = Sertifikat::all()->map(function ($sertifikat) {
            return [
                'id' => $sertifikat->id,
                'sertifikat' => $sertifikat->sertifikat,
                'sertifikat_url' => $this->generateImageUrl($sertifikat->sertifikat),
                'created_at' => $sertifikat->created_at,
                'updated_at' => $sertifikat->updated_at,
            ];
        });

        return response()->json($sertifikats);
    }

    public function show($id)
    {
        $sertifikat = Sertifikat::find($id);

        if (!$sertifikat) {
            return response()->json(['message' => 'Sertifikat not found'], 404);
        }

        return response()->json([
            'id' => $sertifikat->id,
            'sertifikat' => $sertifikat->sertifikat,
            'sertifikat_url' => $this->generateImageUrl($sertifikat->sertifikat),
            'created_at' => $sertifikat->created_at,
            'updated_at' => $sertifikat->updated_at,
        ]);
    }

    private function generateImageUrl($path)
    {
        return Storage::disk('public')->url($path);
    }
}
