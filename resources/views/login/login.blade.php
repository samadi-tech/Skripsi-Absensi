@extends('/login/index')
@section('body-login')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <h4 class="mb-3">Absensi Insan Pembangunan</h4>
                <form method="post">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off">
                    </div>
                    <div class="mt-4 d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark px-5 ">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
