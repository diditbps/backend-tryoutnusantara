<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaketSoal;
use App\Http\Resources\PaketsoalResource;

class PaketsoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $paket_soal = PaketSoal::paginate(10);
        return PaketsoalResource::collection($paket_soal);
    }

    public function filterNamapaketsoal($nama_paket_tryout)
    {
        $paket_soal = PaketSoal::where('nama_paket_tryout', $nama_paket_tryout)
                ->get();

        return PaketsoalResource::collection($paket_soal);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
