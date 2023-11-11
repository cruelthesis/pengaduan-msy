<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use App\Http\Requests\StorePengaduanRequest;
use App\Http\Requests\UpdatePengaduanRequest;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masyarakat = session()->get('id');

        $pengaduan = Pengaduan::where('nik', $masyarakat->nik)->get();
        return view('client.part.historipengaduan', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePengaduanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nik = session()->get('id');

        $data = $request->validate([
            'foto' => 'required',
            'isi_laporan' => 'required',
            'judul' => 'required'
        ]);

        $gambar = $request->file('foto')->getClientOriginalName();
        $request->foto->move(public_path('img'),$gambar);

        $pengaduan = [
            'nik' => $nik['nik'],
            'tgl_pengaduan' => now(),
            'judul' => $data['judul'],
            'isi_laporan' => $data['isi_laporan'],
            'foto' => $gambar,
            'status' => '0'
        ];

        // dd($pengaduan);

        Pengaduan::create($pengaduan);
        return redirect ('historipengaduan/masyarakat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $detailpengaduan = Pengaduan::all();
        $detail = Pengaduan::with([
            'detail', 'masyarakat'
        ])->findOrFail($id);

        $tanggapan = Tanggapan::where('id_pengaduan', $id)->first();
        

        // dd($detail);

        return view('client.part.detailpengaduan', compact('detail', 'tanggapan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengaduanRequest  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengaduanRequest $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
