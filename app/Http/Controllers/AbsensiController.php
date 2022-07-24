<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAbsensiRequest;
use App\Http\Requests\UpdateAbsensiRequest;
use App\Models\Absensi;
use Error;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{

    public function index()
    {
        return view('absensi');
    }

    public function history()
    {
        $absensi = Absensi::orderBy('id', 'DESC')->get();
        return view('history', [
            'data' => $absensi,
        ]);
    }

    public function absensiPost(Request $request)
    {
        $data = [
            'npm' => $request->npm,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'matakuliah' => $request->matakuliah,
            'keterangan' => $request->keterangan,
        ];
        Absensi::create($data);
        return redirect('/absensi');
    }

    public function create(Request $request)
    {
        $data = [
            'npm' => $request->npm,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'matakuliah' => $request->matakuliah,
            'keterangan' => $request->keterangan,
        ];

        try {
            $absensi = Absensi::create($data);
            $config = [
                'pesan' => 'Kirim data absensi berhasil',
                'data' => $absensi
            ];
            return response()->json($config, 200);
        } catch (Error) {
            $data = [
                'pesan' => 'Kirim data absensi gagal',
            ];
            return response()->json($absensi, 200);
        }
    }

    public function read()
    {
        try {
            $absensi = Absensi::orderBy('id', 'DESC')->get();
            $config = [
                'pesan' => 'GET data absensi berhasil',
                'data' => $absensi
            ];
            return response()->json($config, 200);
        } catch (Error) {
            $config = [
                'pesan' => 'GET data absensi gagal'
            ];
            return response()->json($config, 200);
        }
    }

    public function update(Request $request)
    {
    }


    public function destroy(Absensi $absensi)
    {
        //
    }
}
