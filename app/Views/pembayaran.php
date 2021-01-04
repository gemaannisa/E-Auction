
<div class="container">
    <div class="row">
        <div class="col">
            <form action="/home/struct" method="post" id="confirm-form">
            <h3 class="m-3">Konfirmasi Pembayaran</h3>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Kode Lelang</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Pembayaran via</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Bank BNI
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Bank BRI
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        DANA
                    </label>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama rekening pengirim</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Tanggal transaksi</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jam transaksi</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Upload bukti pembayaran</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Konfirmasi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>