<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuKontroler extends Controller
{
  public function show(Request $req)
  {
    $data = Buku::paginate(5);
    return view(
      'buku',
      compact('data'),
      [
        'judul' => 'List Buku',
      ]
      );
  }

  public function postBuku(Request $req)
  {
    $val = new Buku();

    $val->kode_buku = $req->kode_buku;
    $val->judul = $req->judul;
    $val->pengarang = $req->pengarang;
    $val->tahun = $req->tahun;
    $val->isbn = $req->isbn;
    $val->jumlah_hal = $req->jumlah_hal;
    $val->save();

    return redirect('/buku');
  }

  public static function editBuku($id)
  {
    $editBuku = Buku::findOrFail($id);
   return view('edit.editBuku', compact('editBuku'));
  }

  public static function updateBuku(Request $req)
  {
    // $valId = Buku::findOrFail($id);
    // $valId->update($req->all());

    Buku::where('id', $req->id)->update([
      'kode_buku' => $req->input('kode_buku'),
      'judul' => $req->input('judul'),
      'pengarang' => $req->input('pengarang'),
      'tahun' => $req->input('tahun'),
      'isbn' => $req->input('isbn'),
      'jumlah_hal' => $req->input('jumlah_hal'),
    ]);

    return redirect('/buku');
  }

  public static function hapus($id)
  {
    $model = Buku::findOrFail($id);
    $model->delete();
    return redirect('/buku');
  }

  
}