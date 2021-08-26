    <?php include "./Logic/koneksi.php"; ?>
     <?php require "header.php"; ?>

    <div class="header ">
        <div class="judul">
            <h1>Pendaftar</h1>
            <hr>

        </div>

    </div>

    <div class="daftar-para-peserta container">
        <table class="table  table-striped table-bordered table-hover">
            <tr class="table-dark">
                <th>No</th>
                <th>Nama Peserta</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        <?php
            $sql = "SELECT * FROM calon_peserta";
            $query = mysqli_query($db, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo "<tr class='table-light' >";

                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>".$siswa['sekolah_asal']."</td>";

                echo "<td>";
                echo "<a class='btn btn-warning' name='edit' href='form-edit.php?id=".$siswa['id']."'>Edit</a>";
                echo "<a class='btn btn-danger' href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
            
        </table>
    </div>
    <!-- check if connection fail php mysql  -->
    <?php 
    if(mysqli_connect_errno()){
        echo "Connection failed: " . mysqli_connect_error();
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>

</html>