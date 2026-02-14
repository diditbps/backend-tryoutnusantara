<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserOligarkie;
use App\Http\Resources\UserOligarkieResource;
use App\Models\HistoryUser;
use App\Http\Resources\HistoryUserResource;
use App\Models\HistorySoal;
use App\Http\Resources\HistorySoalResource;
use Illuminate\Support\Facades\Hash;

class UseroligarkieController extends Controller
{

    public function loginuser(Request $request)
    {
        // Ambil email dari Body JSON
        $user = UserOligarkie::where('email', $request->email)->first();

        // Cek password dari Body JSON
        if ($user && Hash::check($request->pass, $user->password)) {
            return new UserOligarkieResource($user);
        }

        return response()->json([
            'message' => 'Email atau password salah'
        ], 401);
    }

    public function history($id)
    {
        $historyuser = HistoryUser::findOrFail($id);
        return new HistoryUserResource($historyuser);
    }

    public function historysoal($id)
    {
        $historysoal = HistorySoal::findOrFail($id);
        return new HistorySoalResource($historysoal);
    }
    
}
