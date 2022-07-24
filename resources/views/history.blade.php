@extends('index')
@section('body-home')
    <div class="container-xl container-fluid mt-5 p-5 shadow-sm m">
        @if ($data->count() > 0)
            @foreach ($data as $absensi)
                <div class="row d-flex justify-content-center ">
                    <div class="col-xl-2 p-2">
                        <p>{{ $absensi->created_at }}</p>
                    </div>
                    <div class="col-xl-8 p-2">
                        <p>Nama<span class="text-warning"> {{ $absensi->nama }}</span> NPM
                            <span class="text-warning"> {{ $absensi->npm }}</span> kelas <span
                                class="text-succes">{{ $absensi->kelas }}</span>
                            <span class="text-danger">{{ $absensi->keterangan }}</span> matakuliah
                            <span class="text-success">{{ $absensi->matakuliah }}</span>
                        </p>
                    </div>
                </div>
            @endforeach
        @else
            <h1 class="display-6 text-center">History Kosong</h1>
        @endif


    </div>
@endsection
