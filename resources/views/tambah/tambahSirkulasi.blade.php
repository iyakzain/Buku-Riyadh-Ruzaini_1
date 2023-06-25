<!-- Modal -->
<div class="modal fade" id="tambahSirkulasi" tabindex="-1" aria-labelledby="tambahBukuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/tambahSirkulasi" class="row g-3">
          @csrf
          <div class="form-floating">
            <input type="text" class="form-control" id="nbi" placeholder="143294002" name="nbi">
            <label class="pl-4" for="nbi">NBI</label>
          </div>
          <div class="form-floating">
            <input type="number" class="form-control" id="user_id" placeholder="143294002" name="user_id">
            <label class="pl-4" for="user_id">User ID</label>
          </div>
          <div class="form-floating">
            <input type="number" class="form-control" id="buku_id" placeholder="143294002" name="buku_id">
            <label class="pl-4" for="buku_id">Buku ID</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="kode_buku" placeholder="120523" name="kode_buku">
            <label class="pl-4" for="kode_buku">Kode Buku</label>
          </div>
          <div class="form-floating">
            <input type="date" class="form-control" id="tgl_pinjam-p" placeholder="24 juni 2023" name="tgl_pinjam">
            <label class="pl-4" for="tgl_pinjam-p">Tanggal Pinjam</label>
          </div>
          <div class="form-floating">
            <input type="date" class="form-control" id="tgl_kembali" placeholder="02 juli 2023" name="tgl_kembali">
            <label class="pl-4" for="tgl_kembali">Tanggal Kembail</label>
          </div>
          <div class="form-floating">
            <input type="number" class="form-control" id="denda" placeholder="20.000" name="denda">
            <label class="pl-4" for="denda">Denda</label>
          </div>
          <div class="form-group">
            <select class="form-select" aria-label="Default select example" name="kondisi">
              <option selected class="text-black-50">Kondisi</option>
              <option value="Baik">Baik</option>
              <option value="Rusak">Rusak</option>
            </select>
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