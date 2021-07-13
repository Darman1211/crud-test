<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index(){
    	$siswa = DB::table('siswa')->get();
    	return view('index',['siswa' => $siswa]);
 
    }

    public function tambah(){
		return view('tambah');
	 
	}
	public function input(Request $request){
		DB::table('siswa')->insert([
			'id' => $request->id,
			'nama' => $request->nama,
			'kelas' => $request->kelas,
			'alamat' => $request->alamat,
			'jk' => $request->jk
		]);
		return redirect('/siswa');
	 
	}

	public function edit($id){
		$siswa = DB::table('siswa')->where('id',$id)->get();
		return view('edit',['siswa' => $siswa]);
 
	}

	public function update(Request $request) {
		DB::table('siswa')->where('id',$request->id)->update([
			'nama' => $request->nama,
			'kelas' => $request->kelas,
			'alamat' => $request->alamat,
			'jk' => $request->jk
		]);
		return redirect('/siswa');
	}

	public function hapus($id){
		DB::table('siswa')->where('id',$id)->delete();
		return redirect('/siswa');
	}
}
