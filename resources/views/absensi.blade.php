@extends('index')
@section('body-home')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <h4 class="mb-3">Absensi Insan Pembangunan</h4>

                <form method="post">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="text" class="form-control" id="npm" name="npm" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select" name="kelas" id="kelas">
                            <option selected>Pilih Kelas</option>
                            <option value="SI 8B Malam">SI 8B Malam</option>
                            <option value="SI 8C Malam">SI 8C Malam</option>
                            <option value="SI 8D Malam">SI 8D Malam</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="matakuliah" class="form-label">Matakuliah</label>
                        <select class="form-select" name="matakuliah" id="matakuliah">
                            <option selected>Pilih Matakuliah</option>
                            <option value="Matematika">Matematika</option>
                            <option value="P Android">P Android</option>
                            <option value="P Website">P Website</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <select class="form-select" name="keterangan" id="keterangan">
                            <option selected>Pilih Keterangan</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Tidak Hadir">Tidak Hadir</option>
                        </select>
                    </div>

                    <div class="mt-4 d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark px-5 ">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
