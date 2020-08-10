<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyekController extends Controller
{
    public function index(){
        $proyek = DB::table('proyek')->get();
        return view('index', compact('proyek'));
    }
    public function create(){
        $manager = DB::table('karyawan')->where('jabatan', 'manager')->first();

        return view('create', compact('manager'));
    }
    public function edit($id){
        $proyek = DB::table('proyek')->where('id', $id)->first();
        return view('edit', compact('proyek'));

    }
    public function show($id){
        $proyek = DB::table('proyek')->where('id', $id)->first();
        // $users = DB::select('select * from student_details');
        // $manager = DB::select('select k.nama from karyawan k join proyek p on k.id = p.karyawanid');
        // $manager = DB::table('karyawan')->where(['id', $id], ['nama', 'like', 'm%'])->get();
        $manager = DB::table('proyek')->join('karyawan', 'karyawan.id', '=', 'proyek.karyawanid')->select('karyawan.nama')->get();
        return view('show', compact('proyek', 'manager'));
        
    }
    public function simpan(Request $request){
        // tangkap data dari input ke database
        // dd($request->all());
        $query = DB::table('proyek')->insert([
            "namaProyek" => $request["judul"],
            "deskripsiProyek" => $request["desc"],
            "tglMulaiProyek" => $request["mulai"],
            "tglDeadlineProyek" => $request["deadline"]
        ]);

        return redirect('/pertanyaan');
    }
}
