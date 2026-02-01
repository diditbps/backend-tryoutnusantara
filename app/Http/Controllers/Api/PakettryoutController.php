<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaketTryout;
use App\Http\Resources\PakettryoutResource;

class PakettryoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $paket_tryout = PaketTryout::paginate(10);
        return PakettryoutResource::collection($paket_tryout);
    }

    public function filterID($nama_paket_tryout)
    {
        $paket_tryout = PaketTryout::where('nama_paket_tryout', $nama_paket_tryout)
                ->get();

        return PakettryoutResource::collection($paket_tryout);
    }

    public function isPremium($premium)
    {
        $paket_tryout = PaketTryout::where('is_premium', $premium)
                ->get();

        return PakettryoutResource::collection($paket_tryout);
    }

    public function isEvent($event)
    {
        $paket_tryout = PaketTryout::where('is_event', $event)
                ->get();

        return PakettryoutResource::collection($paket_tryout);
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
