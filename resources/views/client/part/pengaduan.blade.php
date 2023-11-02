@extends('client.landingclient')
@section('content')

<div class="card mt-4">
  {{-- <div class="card">
    <div class="card-header">
      <h3 class="card-title">Card title</h3>
    </div>
    <div class="card-body">
      <p class="text-secondary">This is some text within a card body.</p>
    </div>
  </div> --}}
  

    <div class="card-header">
        <div class="card-title">
            <h3>Kirim Pengaduan</h3>
        </div>
    </div>
    <form action="{{ url('kirimpengaduan/masyarakat') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="mb-3">
                    <div class="form-label">Foto</div>
                    <input name="foto" type="file" class="form-control" />
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Isi Pengaduan</label>
                    <textarea name="isi_laporan" class="form-control" data-bs-toggle="autosize" placeholder="Tulis laporan anda..."></textarea>
                </div>
    
            </div>
        </div>
        <div class="card-footer text-end">
            <div class="d-flex">
              <button type="submit" class="btn btn-primary ms-auto">Kirim</button>
            </div>
        </div>
    </form>

@endsection