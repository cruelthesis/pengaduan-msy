<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>

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
              <h2 class="h2 text-center mb-4">Registrasi Akun</h2>
                <form action="{{ url('postregis/masyarakat') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">NIK</label>
                        <input name="nik" type="number" class="form-control" placeholder="isi NIK anda">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" placeholder="isi Nama Lengkap Anda">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telepon</label>
                        <input name="telp" type="number" class="form-control" placeholder="no telpon anda">
                    </div>
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
                    <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                    </div>
                </form>
            </div>
            
          </div>
          <div class="text-center text-muted mt-3">
            Sudah Punya Akun? <a href="{{ url('login/masyarakat') }}" tabindex="-1">Login Disini</a>
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