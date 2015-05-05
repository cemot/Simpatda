 <div class="span8">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th style="width:10px">NO</th>
                <th style="width:10px">ID</th>
                <th style="width:10px">DESCRIPTION</th>
                <th style="width:10px">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i = 1;
                $jml_per_halaman = 10; // jumlah data yg ditampilkan perhalaman
                $jml_data = mysql_num_rows(mysql_query('select * from sny_m_jusaha order by id desc'));                
                $row2=mysql_fetch_array($jml_data);
                $jml_halaman = ceil($jml_data / $jml_per_halaman);
                echo 'jml data: '.$jml_data;
                break;
                // query pada saat mode pencarian
                if(isset($_POST['pencarian'])) {
                    $kunci = $_POST['pencarian'];
                    echo "<strong>Hasil pencarian untuk kata kunci $kunci</strong>";
                    $query = mysql_query("
                        SELECT * FROM sny_m_jusaha
                        WHERE id LIKE '%$kunci%'
                                        OR Description LIKE '%$kunci%'                        
                                        order by id desc
                    ");
                // query jika nomor halaman sudah ditentukan
                } elseif(isset($_POST['halaman'])) {
                    $halaman = $_POST['halaman'];
                    $i = ($halaman - 1) * $jml_per_halaman  + 1;
                    $query = mysql_query("SELECT * FROM sny_m_jusaha order by id desc LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
                // query ketika tidak ada parameter halaman maupun pencarian
                } else {
                    $query = mysql_query("SELECT * FROM sny_m_jusaha order by id desc  LIMIT 0, $jml_per_halaman");
                    $halaman = 1; //tambahan
                }
                while($data = mysql_fetch_array($query)){

            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $data['ID'] ?></td>
                <td><?php echo $data['Description'] ?></td>
                <td>
                    <a href="#dialog-jab" id="<?php echo $data['ID'] ?>" class="ubah" data-toggle="modal">
                        <i class="ace-icon fa fa-pencil-square-o"></i>
                    </a>
                    &nbsp
                    <a href="#" id="<?php echo $data['ID'] ?>" class="hapus">
                        <i class="ace-icon glyphicon glyphicon-trash"></i>
                    </a>
                </td>
            </tr>
            <?php
                $i++;
                }
            ?>
        </tbody>
</table>
 
<?php if(!isset($_POST['pencarian'])) { ?>
<!-- untuk menampilkan menu halaman -->
<div class="pagination pagination-center">
  <ul>
    <?php

    // tambahan
    // panjang pagig yang akan ditampilkan
    $no_hal_tampil = 5; // lebih besar dari 3

    if ($jml_halaman <= $no_hal_tampil) {
        $no_hal_awal = 1;
        $no_hal_akhir = $jml_halaman;
    } else {
        $val = $no_hal_tampil - 2; //3
        $mod = $halaman % $val; //
        $kelipatan = ceil($halaman/$val);
        $kelipatan2 = floor($halaman/$val);

        if($halaman < $no_hal_tampil) {
            $no_hal_awal = 1;
            $no_hal_akhir = $no_hal_tampil;
        } elseif ($mod == 2) {
            $no_hal_awal = $halaman - 1;
            $no_hal_akhir = $kelipatan * $val + 2;
        } else {
            $no_hal_awal = ($kelipatan2 - 1) * $val + 1;
            $no_hal_akhir = $kelipatan2 * $val + 2;
        }

        if($jml_halaman <= $no_hal_akhir) {
            $no_hal_akhir = $jml_halaman;
        }
    }

    for($i = $no_hal_awal; $i <= $no_hal_akhir; $i++) {
        // tambahan
        // menambahkan class active pada tag li
        $aktif = $i == $halaman ? ' active' : '';
    ?>
	<ul class="pagination pull-left no-margin">
    <li class="halaman<?php echo $aktif ?>" id="<?php echo $i ?>"><a href="#"><?php echo $i ?></a></li></ul>
    <?php } ?>
  </ul>
</div>
</div>

 
<?php
}else{
	session_destroy();
	header('Location:../index.php?status=Silahkan Login');
}
?>