@extends('client.landingclient')
@section('content')

<div class="page-header mt-4">
  <div class="row align-items-center">
    <div class="col">
      <h2 class="page-title">
        Histori Pengaduan
      </h2>
    </div>
    <div class="col-auto ms-auto">
      <a href="{{ url('lapor/masyarakat') }}" class="btn btn-primary d-none d-sm-inline-block">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <line x1="12" y1="5" x2="12" y2="19" />
          <line x1="5" y1="12" x2="19" y2="12" />
        </svg>
        Kirim Pengaduan
      </a>
    </div>
  </div>
</div>

<div class="page-body mb-4">
  <div class="row align-items-center">
    @foreach ($pengaduan as $pengaduan)
    <div class="col-3 d-flex">
      <div class="card card-link card-link-pop">
        <div class="card-img-top">
          <img src="{{ asset('img/'.$pengaduan->foto) }}" width="350" height="150" alt="">
        </div>
        <div class="card-body">
          <h3 class="card-title">{{ $pengaduan->judul }}</h3>
          <p class="card-text text-muted text-truncate" style="max-width: 250px">{{ $pengaduan->isi_laporan }}</p>
          <div class="float-end">
            @if ($pengaduan->status == '0')
              <span class="status status-red">Belum Proses</span>
              @elseif ($pengaduan->status == 'proses')
              <span class="status status-yellow">Proses</span>
              @elseif ($pengaduan->status == 'selesai')
              <span class="status status-green">Selesai</span>
            @endif
          </div>
        </div>
        <div class="card-footer">
          <div class="float-end">
            <a href="{{ url('detailpengaduan/masyarakat/'.$pengaduan->id) }}" class="btn btn-primary ms-auto">Detail & Tanggapan</a>
          </div>
        </div>
      </div>
      
    </div> 
    @endforeach
  </div>
</div>


{{-- <div class="card mt-4 mb-4">
  <div class="card-header">
    <h3 class="card-title">Histori Pengaduan</h3>
    <div class="card-actions">
      <a href="{{ url('lapor/masyarakat') }}" class="btn btn-primary">
        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
        Kirim Pengaduan
      </a>
    </div>
  </div>
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-vcenter table-mobile-md card-table justify-content-center">
        <thead>
          <tr>
            <th>no</th>
            <th>Judul</th>
            <th>Gambar</th>
            <th>Isi</th>
            <th>Status</th>
          </tr>
        </thead>
        @php
          $no = 0;
        @endphp
        <tbody>
          @foreach ($pengaduan as $pengaduan)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $pengaduan->judul }}</td>
            <td>test</td>
            <td>{{ $pengaduan->isi_laporan }}</td>
            <td>
                <div class="btn">proses</div>
            </td>
          @endforeach
          
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div> --}}



@endsection