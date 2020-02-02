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
                            <label for="asal_surat" class="col-sm-3 control-label">Asal Surat</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="asal_surat" class="form-control">
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
                            <label for="penerima" class="col-sm-3 control-label">Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" class="form-control" id="inputEmail3" placeholder="Inputkan Penerima" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_terima" class="col-sm-3 control-label">Tanggal Terima</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_terima" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Terima" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar_surat" class="col-sm-3 control-label">Pengantar Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengantar_surat" class="form-control" id="inputPassword3" placeholder="Inputkan Staff Pengantar Surat" required>
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
                    <a href="?page=keluar&actions=tampil" class="btn btn-danger btn-sm">
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
  $asalsurat=$_POST['asal_surat'];
  $tglsurat=$_POST['tgl_surat'];
  $terima=$_POST['penerima'];
  $tglterima=$_POST['tgl_terima'];
  $pengantar=$_POST['pengantar_surat'];
  $hal=$_POST['perihal'];
    //buat sql
   $sql="INSERT INTO suratkeluar VALUES ('','$nosurat','$asalsurat','$tglsurat','$terima','$tglterima','$pengantar','$hal')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=keluar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
