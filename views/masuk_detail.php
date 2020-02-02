<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Surat Masuk</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM suratmasuk WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
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
                            <td>Staff Pengantar Surat</td> <td><?= $data['pengantar_surat'] ?></td>
                        </tr>
						<tr>
                            <td>Staff Penerima Surat</td> <td><?= $data['penerima_surat'] ?></td>
                        </tr>
						<tr>
                            <td>Perihal</td> <td><?= $data['perihal'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=masuk&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Surat </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

