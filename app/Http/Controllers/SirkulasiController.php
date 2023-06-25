<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Sirkulasi;
use App\Models\User;
use Illuminate\Http\Request;

class SirkulasiController extends Controller
{
  public function showSirkulasi(Request $req)
  {
    $dataSirkulasi = Sirkulasi::paginate(5);
    return view(
      'sirkulasi',
      compact('dataSirkulasi'),
      [
        'judul' => 'List Sirkulasi',
      ]
    );
  }

  public function postSirkulasi(Request $req)
  {
    $val = new Sirkulasi();

    $user = new User();
    $buku = new Buku();
    // $user->user()->save($val) ;
    // $buku->buku()->save($val) ;
    // $req->user()->save($val);
    // $req->buku()->save($val);
    $val->nbi = $req->nbi;
    $user->user_id = $req->user_id;
    $buku->buku_id = $req->buku_id;
    $val->kode_buku = $req->kode_buku;
    $val->tgl_pinjam = $req->tgl_pinjam;
    $val->tgl_kembali = $req->tgl_kembali;
    $val->denda = $req->denda;
    $val->kondisi = $req->kondisi;
    $val->save();

    return redirect('/sirkulasi');
  }

  public static function editSirkulasi($id)
  {
    $editSirkulasi = Sirkulasi::findOrFail($id);
    return view('edit.editSirkulasi', compact('editSirkulasi'));
  }

  public static function updateSirkulasi(Request $req)
  {
    // $updateSirkulasi = Sirkulasi::findOrFail($id);
    // $updateSirkulasi->update($request->all());
    Sirkulasi::where('id', $req->id)->update([
      'tgl_pinjam' => $req->input('tgl_pinjam'),
      'nbi' => $req->input('nbi'),
      'kode_buku' => $req->input('kode_buku'),
      'tgl_kembali' => $req->input('tgl_kembali'),
      'denda' => $req->input('denda'),
      'kondisi' => $req->input('kondisi'),
    ]);

    return redirect('/sirkulasi');
  }

  public static function hapusSirkulasi($id)
  {
    $model = Sirkulasi::findOrFail($id);
    $model->delete();
    return redirect('/sirkulasi');
  }

  public static function detailPeminjam($nbi)
  {
    
    $datakulasi = Sirkulasi::find($nbi);

    return view('sirkulasi.peminjam', compact('datakulasi'));
  }
}