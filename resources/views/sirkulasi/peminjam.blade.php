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
        <h6 class="m-0 font-weight-bold text-primary">Laporan</h6>
        {{-- <form action="/detailPeminjam/{{$dataSirkulasi->id}}">
        </form> --}}
        {{-- <input type="number" hidden aria-hidden="true" value="{{$dataSirkulasi->id}}" name="id" id="id"> --}}
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="row">
          <div class="col-lg-10 d-block mb-4">
            <h4 style="text-transform: capitalize">Nama : {{ Auth::user()->nama }}</h4>
            <h4 style="text-transform: capitalize">NBI : {{$datakulasi}}</h4>
          </div>
          <div class="col">
            <table class="table table-bordered border-info table-hover">
              <thead class="table-info">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kode Buku</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Tanggal Pinjam</th>
                  <th scope="col">Tanggal Kembali</th>
                  <th scope="col">Kondisi</th>
                  <th scope="col">Denda</th>
                  {{-- <th scope="col">Aksi</th> --}}
                </tr>
              </thead>
              <tfoot>
                <tr class="table-info">
                  <th></th>
                  <th colspan="6">Denda</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($datakulasi as $item)
                <tr>
                  <th scope="row">{{ $loop->iteration}}</th>
                  <td>{{$item->kode_buku}}</td>
                  <td>{{$item->judul}}</td>
                  <td>{{$item->pengarang}}</td>
                  <td>{{$item->tahun}}</td>
                  <td>{{$item->isbn}}</td>
                  <td>{{$item->jumlah_hal}}</td>
                  <td>{{$item->judul}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection