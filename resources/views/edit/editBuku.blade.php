@extends('main.index')

@section('container')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 text-gray-800 pl-4">Sirkulasi</h1>
  </div>

  <div class="dropdown-divider mb-4"></div>

  <div class="container-fluid">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Edit Buku</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <form action="/updateBuku" class="row g-3">
          <input aria-hidden="true" hidden type="text" class="form-control" id="id" placeholder="14" value="{{$editBuku->id}}" name="id">
          <div class="form-floating">
            <input type="text" class="form-control" id="kode_buku" placeholder="12344" value="{{$editBuku->kode_buku}}" name="kode_buku">
            <label class="pl-4" for="kode_buku">Kode Buku</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="judul" placeholder="judul" value="{{$editBuku->judul}}" name="judul">
            <label class="pl-4" for="judul">Judul</label>
          </div>
          <div class="form-floating">
            {{-- <input type="text" class="form-control" id="pengarang" placeholder="Pengarang" value="{{$editBuku->pengarang}}" name="pengarang"> --}}
            <textarea style="height: 25vh" name="pengarang" class="form-control" id="pengarang" placeholder="Pengarang" cols="130" rows="12">{{$editBuku->pengarang}}</textarea>
            <label class="pl-4" for="pengarang">Pengarang</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="tahun" value="{{$editBuku->tahun}}" name="tahun" placeholder="2020">
            <label class="pl-4" for="tahun">Tahun</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="isbn" value="{{$editBuku->isbn}}" name="isbn" placeholder="23234">
            <label class="pl-4" for="isbn">ISBN</label>
          </div>
          <div class="form-floating">
            <input type="number" class="form-control" id="jumlah_hal" value="{{$editBuku->jumlah_hal}}" name="jumlah_hal" placeholder="12">
            <label class="pl-4" for="jumlah_hal">Jumlah Halaman</label>
          </div>
      </div>
      <div class="card-footer">
        <a href="/buku" type="button" class="btn btn-secondary" >Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection