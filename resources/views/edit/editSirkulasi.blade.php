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
        <form action="/updateSirkulasi" class="row g-3">
          <input type="hidden" class="form-control" id="id" name="id" value="{{$editSirkulasi->id}}"
            aria-describedby="emailHelp">
          <div class="form-floating">
            <input type="text" class="form-control" id="nbi" value="{{$editSirkulasi->nbi}}" placeholder="143294002"
              name="nbi">
            <label class="pl-4" for="nbi">NBI</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="kode_buku" value="{{$editSirkulasi->kode_buku}}"
              placeholder="120523" name="kode_buku">
            <label class="pl-4" for="kode_buku">Kode Buku</label>
          </div>
          <div class="form-floating">
            <input type="date" class="form-control" id="tgl_pinjam" value="{{$editSirkulasi->tgl_pinjam}}"
              placeholder="24 juni 2023" name="tgl_pinjam">
            <label class="pl-4" for="tgl_pinjam">Tanggal Pinjam</label>
          </div>
          <div class="form-floating">
            <input type="date" class="form-control" id="tgl_kembali" value="{{$editSirkulasi->tgl_kembali}}"
              placeholder="02 juli 2023" name="tgl_kembali">
            <label class="pl-4" for="tgl_kembali">Tanggal Kembail</label>
          </div>
          <div class="form-floating">
            <input type="number" class="form-control" id="denda" value="{{$editSirkulasi->denda}}" placeholder="20.000"
              name="denda">
            <label class="pl-4" for="denda">Denda</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="kondisi" value="{{$editSirkulasi->kondisi}}"
              placeholder="20.000" name="kondisi">
            <label class="pl-4" for="kondisi">Kondisi</label>
          </div>
          <div class="card-footer">
            <a href="/sirkulasi" type="button" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
    </div>
  </div>
</div>
</div>
@endsection