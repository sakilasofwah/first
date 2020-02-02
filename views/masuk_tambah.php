<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Surat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="no_surat" class="col-sm-3 control-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_surat"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kepada" class="col-sm-3 control-label">Kepada</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="kepada" class="form-control">
                                     <option value="Kepala Dinas">Kepala Dinas</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Kasubag Umum">Kasubag Umum</option>
                                    <option value="Kasubag Program & Keuangan">Kasubag Program & Keuangan</option>
                                    <option value="Kabid Perdagangan">Kabid Perdagangan</option>
                                    <option value="Kabid Perindustrian">Kabid Perindustrian</option>
                                    <option value="Kabid Pasar">Kabid Pasar</option>
                                    <option value="Bendahara">Bendahara</option>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_surat" class="col-sm-3 control-label">Tanggal Surat</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_surat" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Surat" required>
                            </div>
                        </div>
						 
						 <div class="form-group">
                            <label for="pengirim" class="col-sm-3 control-label">Pengirim</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengirim" class="form-control" id="inputEmail3" placeholder="Inputkan Pengirim" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar_surat" class="col-sm-3 control-label">Pengantar Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengantar_surat" class="form-control" id="inputPassword3" placeholder="Inputkan Staff Pengantar Surat" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penerima_surat" class="col-sm-3 control-label">Penerima Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima_surat" class="form-control" id="inputPassword3" placeholder="Inputkan Staff Penerima Surat" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="perihal" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="perihal" class="form-control" id="inputPassword3" placeholder="Inputkan Perihal">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Surat</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=masuk&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Surat
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nosurat=$_POST['no_surat'];
  $pada=$_POST['kepada'];
  $tglsurat=$_POST['tgl_surat'];
  $kirim=$_POST['pengirim'];
  $tglmasuk=$_POST['tgl_masuk'];
  $pengantar=$_POST['pengantar_surat'];
  $penerimasurat=$_POST['penerima_surat'];
  $hal=$_POST['perihal'];
    //buat sql
    $sql="INSERT INTO suratmasuk VALUES ('','$nosurat','$pada','$tglsurat','$kirim','$tglmasuk','$pengantar','$penerimasurat','$hal')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=masuk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
