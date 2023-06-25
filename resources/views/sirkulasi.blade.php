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
        <h6 class="m-0 font-weight-bold text-primary">Tabel Sirkulasi</h6>
        <div class="d-flex gap-4">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#tambahSirkulasi">Tambah</button>
          {{-- <a href="/sirkulasi/detailPeminjam" class="btn btn-primary">Laporan</a> --}}
        </div>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <table class="table table-bordered border-info table-hover">
          <thead class="table-info">
            <tr>
              <th scope="col">No</th>
              <th scope="col">NBI</th>
              <th scope="col">Kode Buku</th>
              <th scope="col">Tanggal Pinjam</th>
              <th scope="col">Tanggal Kembali</th>
              <th scope="col">Denda</th>
              <th scope="col">Kondisi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataSirkulasi as $item)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$item->nbi}}</td>
              <td>{{$item->kode_buku}}</td>
              <td>{{$item->tgl_pinjam}}</td>
              <td>{{$item->tgl_kembali}}</td>
              <td>{{$item->denda}}</td>
              <td>{{$item->kondisi}}</td>
              <td>
                <div class="container">
                  <a href="/sirkulasi/detailPeminjam/user?{{$item->user_id}}&buku_id={{$item->buku_id}}"
                    class="btn btn-primary m-1"><i class="bi bi-eye-fill"></i></a>
                  <a href="/editSirkulasi/edit/{{$item->id}}" class="btn btn-warning m-1"><i
                      class="bi bi-pencil-square"></i></a>
                  <a href="/hapusSirkulasi/{{$item->id}}" class="btn btn-danger m-1"><i
                      class="bi bi-trash-fill"></i></a>
                </div>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
      <div class="container-lg justify-content-between mb-4">
        {{ $dataSirkulasi->links() }}
      </div>
    </div>
  </div>
</div>
@endsection