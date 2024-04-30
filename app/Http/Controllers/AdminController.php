<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function biodatadaftar()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('loginakun');
        }
        $biodata = DB::table('biodata')
            ->orderBy('idbiodata', 'asc')->get();
        $data = [
            'title' => 'Daftar Biodata',
            'biodata' => $biodata,
            'idwarga' => '',
        ];
        return view('admin/biodatadaftar', $data);
    }
    public function biodatatambah()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('loginakun');
        }
        $data = [
            'title' => 'Tambah Biodata',
        ];
        return view('admin/biodatatambah', $data);
    }
    public function biodatatambahsimpan(Request $request)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('loginakun');
        }
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');
        DB::table('biodata')->insert([
            'judul' => $judul,
            'isi' => $deskripsi,
        ]);
        session()->flash('success', 'Berhasil menambahkan data!');
        return redirect('panel/biodatadaftar');
    }
    public function biodataedit($id)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('loginakun');
        }
        $row = DB::table('biodata')->where('idbiodata', $id)->first();
        $data = [
            'title' => 'Edit Biodata',
            'row' => $row,
        ];
        return view('admin/biodataedit', $data);
    }
    public function biodataeditsimpan(Request $request, $id)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('loginakun');
        }
        $data = [
            'judul' => $request->input('judul'),
            'isi' => $request->input('deskripsi'),
        ];
        DB::table('biodata')->where('idbiodata', $id)->update($data);
        session()->flash('success', 'Data berhasil diedit!');
        return redirect('panel/biodatadaftar');
    }
    public function biodatahapus($id)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('loginakun');
        }
        DB::table('biodata')->where('idbiodata', $id)->delete();
        session()->flash('success', 'Berhasil menghapus data!');
        return redirect('panel/biodatadaftar');
    }
    public function logout()
    {
        session()->flush();
        return redirect('/loginakun');
    }
}
