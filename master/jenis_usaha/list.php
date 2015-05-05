<?php 
 include '../../config/functions.php'; 
/**
 * @author: afes oktavianus
 * @abstract: file list for get table sny_m_jusaha
 * @version: 1.0
 * @copyright Copyright (c) 2015, Afes Oktavianus  
*/
    error_reporting(0) ;
    $sesi_username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    $nip           = isset($_SESSION['nip']) ? $_SESSION['nip'] : null;
    
    try
    {
      if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'||$_SESSION['leveluser']=='2'||$_SESSION['leveluser']=='3'||$_SESSION['leveluser']=='4'  )  
      {
          ?>
          <h3 class="header smaller lighter blue">Referensi Jenis Usaha</h3>
          <!-- text box untuk pencarian -->
          <div class="input-prepend pull-center">
              <span class="add-on"><i class="icon-search"></i></span>
              <input class="span8" id="preparInput" type="text" name="pencarian" placeholder="Pencarian...">
              <thead>
                <a href="#dialog-wil" id="0" class="tambah btn btn-app btn-purple btn-xs" data-toggel="modal">
                    <i class="ace-icon fa fa-pencil-square-o bigger-160"></i>
                    Tambah
                    <span class="badge badge-warning badge-right"></span>
                </a>
                <button class="btn btn-app btn-light btn-xs">
                    <i class="ace-icon fa fa-print bigger-160"></i>
                    Print
                </button>

                <a href="?id=jenis-usaha" class="btn btn-app btn-success btn-xs">
                    <i class="ace-icon fa fa-refresh bigger-160"></i>
                    Refresh
                </a>
          </div>
          
          <!-- tempat untuk menampilkan data wilayah -->
          <div id="data-wil">
              <?php include 'jUsahaData.php'; ?>
          </div>            
          </thead>
          
          <!-- awal untuk modal dialog -->
          <div id="dialog-wil" class="modal fade" tabindex="-1">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header no-padding">
                          <div class="table-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                 <span class="white">&times;</span>
                              </button>
                              <i id="myModalLabel">Tambah Data </i> 
                          </div>
                      </div>
                      <!-- tempat untuk menampilkan form wilayah -->
                      <div class="modal-body">
                          <div class="modal-content">                              
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
                          <button id="simpan-jab" class="btn btn-success" data-dismiss="collapse" aria-hidden="true" >Simpan</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- akhir kode modal dialog -->

          <!-- memanggil berkas javascript yang dibutuhkan -->
      
      <?php
      }else{
	  echo "<script>alert('Mohon Maaf anda tidak bisa akses halaman ini'); window.location = '../index.php'</script>";
      }
    } catch (Exception $e) 
    {
        echo 'Message: '.$e->getMessage();
    }
?>