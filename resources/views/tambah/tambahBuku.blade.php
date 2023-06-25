<!-- Modal -->
<div class="modal fade" id="tambahBuku" tabindex="-1" aria-labelledby="tambahBukuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/tambahBuku" class="row g-3">
          <div class="form-floating">
            <input type="text" class="form-control" id="kode_buku" placeholder="12344" name="kode_buku">
            <label class="pl-4" for="kode_buku">Kode Buku</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="judul" placeholder="judul" name="judul">
            <label class="pl-4" for="judul">Judul</label>
          </div>
          <div class="form-floating">
            {{-- <input type="text" class="form-control" id="pengarang" placeholder="Pengarang" name="pengarang"> --}}
            <textarea name="pengarang" class="form-control" id="pengarang" placeholder="Pengarang" cols="30" rows="12"></textarea>
            <label class="pl-4" for="pengarang">Pengarang</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="2020">
            <label class="pl-4" for="tahun">Tahun</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="23234">
            <label class="pl-4" for="isbn">ISBN</label>
          </div>
          <div class="form-floating">
            <input type="number" class="form-control" id="jumlah_hal" name="jumlah_hal" placeholder="12">
            <label class="pl-4" for="jumlah_hal">Jumlah Halaman</label>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>