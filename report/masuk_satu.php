<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Surat Masuk</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM suratmasuk WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Agenda Surat Dinas Perdagangan Dan Perindustrian Kota Tanjung Balai  </h2>
                        <h4>Jln. Pahlawan No.1. Kel. Pantai Burung, Kec. TB, Selatan Kota Tanjungbalai<br>Telp. 0623-597679 ,  Kode Pos : 21311 <br> Provinsi Sumatra Utara  
                        <hr>
                        <h3>DATA SURAT MASUK</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                                <tr>
                                    <td>Nomor Surat</td> <td><?= $data['no_surat'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Kepada</td> <td><?= $data['kepada'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Surat</td> <td><?= $data['tgl_surat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pengirim</td> <td><?= $data['pengirim'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pengantar Surat</td> <td><?= $data['pengantar_surat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Penerima Surat</td> <td><?= $data['penerima_surat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Perihal</td> <td><?= $data['perihal'] ?></td>
                                </tr>
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