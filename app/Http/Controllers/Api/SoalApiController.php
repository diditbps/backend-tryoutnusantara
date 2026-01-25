<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Soal;
use App\Http\Resources\SoalApiResource;

class SoalApiController extends Controller
{
    //
    public function index()
    {
        $soals = Soal::paginate(10);
        return SoalApiResource::collection($soals);
    }

    public function show($id)
    {
        $soal = Soal::findOrFail($id);
        return new SoalApiResource($soal);
    }
    public function filterpaketdanqc($paket)
    {
        $soal = Soal::where('kode_paket', $paket) // Filter kolom paket
                ->where('check_qc', 'check')    // Filter kolom check_qc
                ->get();

        return SoalApiResource::collection($soal);
    }
}
