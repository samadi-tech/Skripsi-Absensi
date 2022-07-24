<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use App\Models\Mahasiswa;
use Error;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        return view('/login/login');
    }

    public function register()
    {
        return view('/login/register');
    }
    public function postRegister(Request $request)
    {
        $data = [
            'npm' => $request->npm,
            'username' => $request->username,
            'password' => $request->password,
            'nama' => $request->nama,
        ];
        Mahasiswa::create($data);
        return redirect('/login');
    }

    public function create(Request $request)
    {
        $data = [
            'npm' => $request->npm,
            'username' => $request->username,
            'password' => $request->password,
            'nama' => $request->nama,
        ];

        try {
            $mahasiswa = Mahasiswa::create($data);
            $config = [
                'pesan' => 'Kirim data mahasiswa berhasil',
                'data' => $mahasiswa
            ];
            return response()->json($config, 200);
        } catch (Error) {
            $data = [
                'pesan' => 'Kirim data mahasiswa gagal',
            ];
            return response()->json($mahasiswa, 200);
        }
    }

    public function read()
    {
        try {
            $mahasiswa = Mahasiswa::orderBy('id', 'DESC')->get();
            $config = [
                'pesan' => 'GET data mahasiswa berhasil',
                'data' => $mahasiswa
            ];
            return response()->json($config, 200);
        } catch (Error) {
            $config = [
                'pesan' => 'GET data mahasiswa gagal'
            ];
            return response()->json($config, 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMahasiswaRequest  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
