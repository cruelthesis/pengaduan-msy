<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/tabler.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabler-vendors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabler-social.min.css') }}">

    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css') }}">
</head>
<body>
    <div class="page page-center">
        <div class="container container-tight py-4">
          <div class="text-center mb-4">
            <h1>Pengaduan Masyarakat Indonesia</h1>
          </div>
          <div class="card card-md">
            <div class="card-body">
              <h2 class="h2 text-center mb-4">Masuk ke Akun</h2>
              <form action="{{ url('postlogin/masyarakat') }}" method="post">
                @csrf

                @if (Session::has('pesan'))
                  <div class="alert">
                    {{ Session::get('pesan') }}
                  </div>
                @endif

                <div class="mb-3">
                  <label class="form-label">Alamat Email</label>
                  <input name="email" type="email" class="form-control" placeholder="emailanda@email.com">
                </div>
                <div class="mb-2">
                  <label class="form-label">
                    Password/Kata Sandi
                  </label>
                  <div class="input-group input-group-flat">
                    <input name="password" type="password" class="form-control"  placeholder="Masukkan Kata Sandi Anda">
          
                  </div>
                </div>
                <div class="mb-2">
                  <label class="form-check">
                    <input type="checkbox" class="form-check-input"/>
                    <span class="form-check-label">Ingat Saya</span>
                  </label>
                </div>
                <div class="form-footer">
                  <button type="submit" class="btn btn-primary w-100">Masuk</button>
                </div>
              </form>
            </div>
          </div>
          <div class="text-center text-muted mt-3">
            Belum Punya Akun? <a href="{{ url('register/masyarakat') }}" tabindex="-1">Daftar Disini</a>
          </div>
        </div>
      </div>

    <script src="{{ asset('js/demo.min.js') }}"></script>
    <script src="{{ asset('js/tabler.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js') }}"></script>
    <script src="{{ asset('js/demo-theme.min.js') }}"></script>
    <script src="{{ asset('js/tabler.esm.min.js') }}"></script>
</body>
</html>