<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;


class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request) {
        Auth::logout();
        return redirect(route('login'));
    }

    public function tampil() {
        $siswa = siswa::get();
        return view('siswa.tampil',compact('siswa'));
    }

    public function tambah(){
        return view('siswa.tambah');
    }
   
    public function submit(request $request) {
        $siswa = new siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;
        $siswa->save();
    
        return redirect()->route('siswa.tampil');
    }

    public function edit($id) {
        $siswa = siswa::find($id); 
        return view('siswa.edit',compact('siswa'));
    }

    public function update(request $request, $id) {
        $siswa = siswa::find($id);
         $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;
        $siswa->update();
        return redirect()->route('siswa.tampil');
    }
                                
     public function delete($id){
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa.tampil');
    }

    public function index () {
        $siswa=siswa::all();
        return view('siswa.register',compact('siswa'));
    }
}
