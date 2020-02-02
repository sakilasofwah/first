<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Surat Masuk</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2> Sistem Informasi Agenda Surat Dinas Perdagangan Dan Perindustrian Kota Tanjung Balai </h2>
                        <h4>Jln. Pahlawan No.1. Kel. Pantai Burung, Kec. TB, Selatan Kota Tanjungbalai<br>Telp. 0623-597679 ,  Kode Pos : 21311 <br> Provinsi Sumatra Utara 
                        <hr>
                        <h3>DATA SELURUH AGENDA SURAT MASUK</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th width="18%"><center>Nomor Surat</center></th><th width="20%"><center>Kepada</center></th><th width="14%"><center>Tgl. Surat</center></th><th width="15%"><center>Pengirim</center></th><th width="10%">Tgl. Masuk</th><th><center>Pengantar Surat</center></th><th><center>Penerima Surat</center></th><th width="50%"><center>Perihal</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM suratmasuk";
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
                                    <td><?= $data['kepada'] ?></td>
                                    <td><?= $data['tgl_surat'] ?></td>
                                    <td><?= $data['pengirim'] ?></td>
                                    <td><?= $data['tgl_masuk'] ?></td>
                                    <td><?= $data['pengantar_surat'] ?></td>
                                    <td><?= $data['penerima_surat'] ?></td>
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