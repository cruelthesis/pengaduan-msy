@extends('client.landingclient')

@section('content')
{{-- <!-- Page title actions --abc --}}

  @if (session()->has('id'))
  <div class="page-header mt-4">
    <div class="row align-items-center">
      <div class="col">
        <div class="page-pretitle">
          Selamat Datang,
        </div>
        <h2 class="page-title">
          Di Layanan Pengaduan Masyarakat
        </h2>
      </div>
      <div class="col-auto ms-auto">
        <div class="btn-list">
          {{-- <span class="d-none d-sm-inline">
            <a href="#" class="btn">
              New view
            </a>
          </span> --}}
          
          <a href="{{ url('lapor/masyarakat') }}" class="btn btn-primary d-none d-sm-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="12" y1="5" x2="12" y2="19" />
              <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
            Kirim Pengaduan
          </a>
          <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="12" y1="5" x2="12" y2="19" />
              <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-deck row-cards">
        <div class="col-4">
          <div class="card">
            <div class="card-body" style="height: 10rem"></div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-body" style="height: 10rem"></div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-body" style="height: 10rem"></div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-body" style="height: 10rem"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  @endif

  @if (session()->missing('id'))
      <div class="page-header mt-4">
        <div class="row align-items-center">
          <div class="col">
            <div class="page-pretitle">
              Selamat Datang,
            </div>
            <h2 class="page-title">
              Di Layanan Pengaduan Masyarakat
            </h2>
          </div>
        </div>
      </div>
      <div class="page-body">
        <div class="container-xl">
          <div class="row row-deck row-cards">
            <div class="col-4">
              <div class="card">
                <div class="card-body" style="height: 10rem"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="card">
                <div class="card-body" style="height: 10rem"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="card">
                <div class="card-body" style="height: 10rem"></div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body" style="height: 10rem"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
  @endif
  
  

@endsection