<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Http\Requests\StoreMasyarakatRequest;
use App\Http\Requests\UpdateMasyarakatRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.part.utama');
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
     * @param  \App\Http\Requests\StoreMasyarakatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMasyarakatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Masyarakat  $masyarakat
     * @return \Illuminate\Http\Response
     */
    public function show(Masyarakat $masyarakat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Masyarakat  $masyarakat
     * @return \Illuminate\Http\Response
     */
    public function edit(Masyarakat $masyarakat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMasyarakatRequest  $request
     * @param  \App\Models\Masyarakat  $masyarakat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMasyarakatRequest $request, Masyarakat $masyarakat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Masyarakat  $masyarakat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masyarakat $masyarakat)
    {
        //
    }

    public function pagelogin(){
        return view('client.loginclient');
    }

    public function postlogin(Request $request){
        $data = $request->validate([
            'email'=>'email|required',
            'password'=>'required'  
        ]);

        $masyarakat = Masyarakat::where('email',$data)->first();

        if (!$masyarakat) return back()->with('pesan','Email salah');

        $cekpass = Hash::check($request->password, $masyarakat->password);

        if (!$cekpass) return back()->with('pesan', 'Password salah');

        $request->session()->put('id', $masyarakat);
        return redirect('/');

        
    }

    public function register(){
        return view('client.register');
    }

    public function postregis(Request $request){
        $regis = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'telp' => 'required',
            'email' => 'required | email | unique:masyarakats',
            'password' => 'required | min:3',
        ]);

        Masyarakat::create([
            'nik' => $regis['nik'],
            'nama' => $regis['nama'],
            'telp' => $regis['telp'],
            'email' => $regis['email'],
            'password' => Hash::make($regis['password']),
            'isverif' => 0,
        ]);

        return redirect('/');
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }

    public function pengaduan(){
        
        return view('client.part.pengaduan');
    }
}
