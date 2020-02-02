<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Surat Perbulan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilbln=$_POST['bulan'];
        $ambilthn=$_POST['tahun'];
        $bulanNama;
        if ($ambilbln==12) {
          $bulanNama="DESEMBER";
        } elseif ($ambilbln==11) {
          $bulanNama="NOVEMBER";
        } elseif ($ambilbln==10) {
          $bulanNama="OKTOBER";
        } elseif ($ambilbln==9) {
          $bulanNama="SEPTEMBER";
        } elseif ($ambilbln==8) {
          $bulanNama="AGUSTUS";
        } elseif ($ambilbln==7) {
          $bulanNama="JULI";
        } elseif ($ambilbln==6) {
          $bulanNama="JUNI";
        } elseif ($ambilbln==5) {
          $bulanNama="MEI";
        } elseif ($ambilbln==4) {
          $bulanNama="APRIL";
        } elseif ($ambilbln==3) {
          $bulanNama="MARET";
        } elseif ($ambilbln==2) {
          $bulanNama="FEBRUARI";
        } elseif ($ambilbln==1) {
          $bulanNama="JANUARI";
        }

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2> Sistem Informasi Agenda Surat Dinas Perdagangan Dan Perindustrian Kota Tanjung Balai </h2>
                        <h4>Jln. Pahlawan No.1. Kel. Pantai Burung, Kec. TB, Selatan Kota Tanjungbalai<br>Telp. 0623-597679 ,  Kode Pos : 21311 <br> Provinsi Sumatra Utara 
                        <hr>
                        <h3>DATA SURAT KELUAR BULAN   <? echo "$bulanNama $ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
                            <tr>
                                <th>No.</th><th width="18%"><center>Nomor Surat</center></th><th width="20%"><center>Asal Surat</center></th><th width="14%"><center>Tgl. Surat</center></th><th width="15%"><center>Penerima</center></th><th width="10%">Tgl. Terima</th><th><center>Pengantar Surat</center></th><th width="50%"><center>Perihal</center></th>
                            </tr>
                                </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                             <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM suratkeluar WHERE substr(tgl_surat,1,7)='$ambilthn-$ambilbln'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                 <tr>
                                     <td><?= $nomor ?></td>
                                    <td><?= $data['no_surat'] ?></td>
                                    <td><?= $data['asal_surat'] ?></td>
                                    <td><?= $data['tgl_surat'] ?></td>
                                    <td><?= $data['penerima'] ?></td>
                                    <td><?= $data['tgl_terima'] ?></td>
                                    <td><?= $data['pengantar_surat'] ?></td>
                                    <td><?= $data['perihal'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            </tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                 <td colspan="8" class="text-right">
                                        Tanjung Balai  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kasubbag Umum/Kepegawaian<strong></u><br>
                                        NIP.19620326.198602.001
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
