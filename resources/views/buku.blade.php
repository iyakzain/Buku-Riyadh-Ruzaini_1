@extends('main.index')

@section('container')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 text-gray-800 pl-4">Buku</h1>
  </div>

  <div class="dropdown-divider mb-4"></div>

  <div class="container-fluid">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Buku</h6>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahBuku">
          Tambah
        </button>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <table class="table table-bordered border-info table-hover">
          <thead class="table-info">
            <tr class="text-center">
              <th scope="col">No</th>
              <th scope="col">Judul</th>
              <th scope="col">Pengarang</th>
              <th scope="col">Kode Buku</th>
              <th scope="col">Tahun</th>
              <th scope="col">ISBN</th>
              <th scope="col">Jumlah Halaman</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <th scope="row">{{ $loop->iteration}}</th>
              <td>{{$item->judul}}</td>
              <td>{{$item->pengarang}}</td>
              <td>{{$item->kode_buku}}</td>
              <td>{{$item->tahun}}</td>
              <td>{{$item->isbn}}</td>
              <td class="text-center">{{$item->jumlah_hal}}</td>
              <td>
                <div class="d-flex">
                  <a href="/editBuku/{{$item->id}}" class="btn btn-warning m-1"><i class="bi bi-pencil-square"></i></a>
                  <a href="/hapus/{{$item->id}}" class="btn btn-danger m-1"><i class="bi bi-trash-fill"></i></a>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="container-lg justify-content-between mb-4">
        {{ $data->links() }}
      </div>
    </div>
  </div>
</div>
@endsection