<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HistoryUser;
use App\Models\HistorySoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AktivityuserController extends Controller
{
    public function aktivity(Request $request) {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|string|max:255',
            'nama_paket_tryout' => 'required|string|max:255',
            'nama_paket_soal' => 'required|string|max:255',
            'score' => 'required|string|max:255',
            'total_correct' => 'required|string|max:255',
            'total_wrong' => 'required|string|max:255',
            'tanggal_completed' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        try {
            // 2. Simpan Data
            $historyuser = HistoryUser::create([
                'id_user'           => $request->id_user,
                'nama_paket_tryout' => $request->nama_paket_tryout,
                'nama_paket_soal'   => $request->nama_paket_soal,
                'score'             => $request->score,
                'total_correct'     => $request->total_correct,
                'total_wrong'       => $request->total_wrong,
                'status'            => 'completed', // Otomatis terisi
                'tanggal_completed' => $request->tanggal_completed,
            ]);

            return response()->json([
                'message'     => 'Aktivity History User berhasil',
                'historyuser' => $historyuser
            ], 201);

        } catch (\Exception $e) {
            // Jika Error 500, pesan ini akan muncul di Postman
            return response()->json([
                'message' => 'Terjadi kesalahan pada server/database',
                'error'   => $e->getMessage() 
            ], 500);
        }
    } 

    public function historysoal(Request $request) {
        $validator = Validator::make($request->all(), [
            'id_history_user' => 'required|string|max:255',
            'id_soal' => 'required|string|max:255',
            'jawaban_user' => 'required|string|max:255',
            'is_correct' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        try {
            // 2. Simpan Data
            $historysoal = HistorySoal::create([
                'id_history_user'           => $request->id_history_user,
                'id_soal' => $request->id_soal,
                'jawaban_user'   => $request->jawaban_user,
                'is_correct'             => $request->is_correct,
            ]);

            return response()->json([
                'message'     => 'Aktivity History Soal berhasil',
                'historysoal' => $historysoal
            ], 201);

        } catch (\Exception $e) {
            // Jika Error 500, pesan ini akan muncul di Postman
            return response()->json([
                'message' => 'Terjadi kesalahan pada server/database',
                'error'   => $e->getMessage() 
            ], 500);
        }
    } 
}