
     <?php require "header.php"; ?>

    <div class="daftar-baru">
        <h1>Tambah Data Peserta</h1>
        <form action="./Logic/proses-pendaftaran.php" method="POST">
            <fieldset>
                <div class="row mb-3">
                    <label for="inputNama" class="col-sm-2 col-form-label">Nama:</label>
                    <div class="col-sm-6">
                        <input type="nama" class="form-control" name="nama" id="inputNama" placeholder="Nama Lengkap">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat:</label>
                    <div class=" col-sm-6">
                        <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap" id="floatingTextarea2" style="height: 100px"></textarea>

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputJenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin:</label>
                    <div class=" col-sm-6">
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputAgama" class="col-sm-2 col-form-label">Agama:</label>
                    <div class=" col-sm-6">
                        <select name="agama">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Atheis</option>
                        </select>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputAsalSekolah" class="col-sm-2 col-form-label">Sekolah Asal:</label>
                    <div class="col-sm-6">
                        <input name="sekolah_asal" class="form-control" id="inputAsalSekolah" placeholder="Nama sekolah">
                    </div>
                </div>

                <div class="col-auto">
                    <!-- <button type="submit" name="daftar" class="btn btn-primary">Daftar</button> -->
                    <input type="submit" value="Daftar" name="daftar" class="btn btn-primary"/>
                </div>
            </fieldset>
        </form>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>

</html>