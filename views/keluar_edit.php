<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM suratkeluar WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Surat Keluar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nosurat" class="col-sm-3 control-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nosurat" value="<?=$data['no_surat']?>"class="form-control" id="inputEmail3" placeholder="Data Nomor Surat">
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

                         <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Surat</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2020;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->        

                            <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" value="<?=$data['penerima']?>"class="form-control" id="inputEmail3" placeholder="Data Pengirim" >
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Terima</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2020;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->           

                        <div class="form-group">
                            <label for="pengantar_surat" class="col-sm-3 control-label">Pengantar Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengantar_surat" value="<?=$data['pengantar_surat']?>" class="form-control" id="inputPassword3" placeholder="Pengantar Surat Masuk">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="hal" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="hal" value="<?=$data['perihal']?>" class="form-control" id="inputPassword3" placeholder="Perihal">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Surat</button>
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
    $nosurat=$_POST['nosurat'];
    $asal_surat=$_POST['asal_surat'];
    $tglsurat=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $penerima=$_POST['penerima'];
    $tglterima=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $pengantar=$_POST['pengantar_surat'];
    $hal=$_POST['hal'];
    //buat sql
    $sql="UPDATE suratkeluar SET no_surat='$nosurat',asal_surat='$asal_surat',
    tgl_surat='$tglsurat',penerima='$penerima',tgl_terima='$tglterima',pengantar_surat='$pengantar',perihal='$hal' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=keluar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



