<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostingRequest;
use App\Http\Requests\UpdatePostingRequest;
use App\Models\Posting;
use Error;

class PostingController extends Controller
{

    public function index()
    {
        $posting = Posting::orderBy('id', 'DESC')->get();
        return view('home', [
            'data' => $posting,
        ]);
    }


    public function read()
    {
        try {
            $posting = Posting::orderBy('id', 'DESC')->get();
            $config = [
                'pesan' => 'GET data posting berhasil',
                'data' => $posting
            ];
            return response()->json($config, 200);
        } catch (Error) {
            $config = [
                'pesan' => 'GET data posting gagal'
            ];
            return response()->json($config, 200);
        }
    }


    public function store(StorePostingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function show(Posting $posting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function edit(Posting $posting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostingRequest  $request
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostingRequest $request, Posting $posting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posting $posting)
    {
        //
    }
}
