@extends('client.landingclient')
@section('content')
    <div class="page-body">
        <div class="card mb-3">
            <div class="card-header">
              <h3 class="card-title">{{$detail->judul}}</h3>
            </div>
            <div class="card-body">
                <img class="mb-3" src="{{ asset('img/'.$detail->foto) }}" alt="">
            </div>
            <div class="card-body">
                <h4>Isi Laporan:</h4> <br>
                <p>{{ $detail->isi_laporan }}</p>
            </div>
            <div class="card-footer">
                @if ($detail->status == '0')
                <span class="status status-red">Belum Proses</span>
                @elseif ($detail->status == 'proses')
                <span class="status status-yellow">Proses</span>
                @elseif ($detail->status == 'selesai')
                <span class="status status-green">Selesai</span>
              @endif
            </div>
        </div>

        @if (empty($tanggapan->tanggapan))
        <div class="card mb-3">
            <div class="card-header">
              <h3 class="card-title">Belum ada tanggapan</h3>
            </div>
            <div class="card-body">
               <p>kosong</p>
            </div>
        </div>
        @else
        <div class="card mb-3">
            <div class="card-header">
              <h3 class="card-title">Tanggapan</h3>
            </div>
            <div class="card-body">
               <p>{{ $tanggapan->tanggapan }}</p>
            </div>
        </div>
        @endif
        
    </div>
@endsection