@extends('index')
@section('body-home')
    <div class="container-lg mt-5 ">
        <div class="row d-flex  justify-content-center">
            @if ($data->count() > 0)
                @foreach ($data as $posting)
                    <div class="col-lg-3 m-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $posting->judul }}</h5>
                                <p class="my-2 text-sm fst-italic">Diposting Oleh : {{ $posting->penulis }}</p>
                                <p class="card-text">{{ $posting->posting }}</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h1 class="text-center display-6">Postingan Tidak Tersedia ... !</h1>
            @endif

        </div>
    </div>
@endsection
