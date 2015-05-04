<?php 
    session_start();
    error_reporting(0);
    include "config/timeout.php";
    include "config/functions.inc";
    include "config/fungsi_ago.php";
    include "config/fungsi_indotgl.php";

    $nav				= "";
    $ambil				= "home.php";
    $ambilcss1			="";
    $ambilcss2			="";
    $ambilcss3			="";
    $ambilcss4			="";
    $ambilcss5			="";
    $ambilcss6			="";
    $ambilcss7			="";
    $ambilcss8			="";
    $ambilcss9			="";
    $ambilcss10			="";

    $ambiljs0			="";
    $ambiljs1			="";
    $ambiljs2			="";
    $ambiljs3			="";
    $ambiljs4			="";
    $ambiljs5			="";
    $ambiljs6			="";
    $ambiljs7			="";
    $ambiljs8			="";
    $ambiljs9			="";
    $ambiljs10			="";
    $ambiljs11			="";
    $ambiljs12			="";
    $ambilfungsi		="";
    $ambilfungsi2		="";



    $id = isset($_GET['id']) ? $_GET['id'] : "";
    if ($id == "") {
        $nav 		=   "Dashboard";
        $ambil 		=   "home.php";
        $ambilcss1	=   "assets/css/jquery-ui.custom.min.css";
        $ambilcss2	=   "";
        $ambiljs0	=   "assets/js/jquery-1.8.3.min.js";
        $ambiljs1	=   "assets/js/sts.js";
        $ambiljs2	=   "";
        $ambilfungsi	=   "config/fungsi_status.php";


    } elseif ($id == "list_user") {
        $nav		= "List User";
        $ambil		= "lu.php";
        $ambilcss1	= "";
        $ambiljs0	= "assets/js/jquery-1.8.3.min.js";
        $ambiljs1	= "assets/js/lu.js";
    } elseif ($id == "msg") {
        $nav 		= "Inbox";
        $ambil 		= "inbox.php";
        $ambiljs0	= "assets/js/jquery.2.1.1.min.js";
        $ambiljs1	= "";
        $ambiljs2	= "assets/js/bootstrap-tag.min.js";
        $ambiljs3	= "assets/js/jquery.hotkeys.min.js";
        $ambiljs4	= "assets/js/bootstrap-wysiwyg.min.js";
        $ambilfungsi	= "config/fungsi_inbox.php";
    } elseif ($id == "jabatan") {
        $nav 		= "Referensi Jabatan";
        $ambil 		= "ref/jab.php";
        $ambilcss1	= "";
        $ambiljs0	= "assets/js/jquery-1.8.3.min.js";
        $ambiljs1	= "assets/js/jab.js";
    } elseif ($id == "agama") {
        $nav            = "Referensi Agama";
        $ambil          = "ref/t_agama.php";
        $ambiljs0	= "assets/js/jquery.2.1.1.min.js";
    } elseif ($id == "statusp") {
        $nav            = "Referensi Status Pegawai";
        $ambil 		= "ref/t_statuspeg.php";
        $ambiljs0	= "assets/js/jquery.2.1.1.min.js";

    } elseif ($id == "bank") {
        $nav 		= "Referensi Bank Transfer";
        $ambil 		= "ref/t_bank.php";
        $ambiljs0	= "assets/js/jquery.2.1.1.min.js";

    } elseif ($id == "bagian") {
        $nav 		= "Referensi Bagian";
        $ambil 		= "ref/t_bag.php";
        $ambiljs0	= "assets/js/jquery.2.1.1.min.js";
    } elseif ($id == "absen") {
        $nav 		= "Referensi Absen";
        $ambil 		= "ref/abs.php";
        $ambiljs0	= "assets/js/jquery-1.8.3.min.js";
        $ambiljs1	= "assets/js/abs.js";
    } elseif ($id == "profil") {
        $nav 		= "Profile Pegawai";
        $ambil 		= "pegawai/profile.php";
        $ambilcss1	= "assets/css/jquery-ui.custom.min.css";
        $ambilcss2	= "assets/css/jquery.gritter.css";
        $ambilcss3	= "assets/css/select2.css";
        $ambilcss4	= "assets/css/datepicker.css";
        $ambilcss5	= "assets/css/bootstrap-editable.css";
        $ambilcss6	= "";
        $ambiljs0	= "assets/js/jquery.2.1.1.min.js";
        $ambiljs1	= "";
        $ambiljs2	= "assets/js/jquery.gritter.min.js";
        $ambiljs3	= "assets/js/bootbox.min.js";
        $ambiljs4	= "assets/js/jquery.easypiechart.min.js";
        $ambiljs5	= "assets/js/date-time/bootstrap-datepicker.min.js";
        $ambiljs6	= "assets/js/jquery.hotkeys.min.js";
        $ambiljs7	= "assets/js/bootstrap-wysiwyg.min.js";
        $ambiljs8	= "assets/js/select2.min.js";
        $ambiljs9	= "assets/js/fuelux/fuelux.spinner.min.js";
        $ambiljs10	= "assets/js/x-editable/bootstrap-editable.min.js";
        $ambiljs11	= "assets/js/x-editable/ace-editable.min.js";
        $ambiljs12	= "assets/js/jquery.maskedinput.min.js";
        $ambilfungsi	= "config/fungsi_profil.php";
    } elseif ($id == "data_pegawai") {
        $nav 		= "Data Pegawai";
        $ambil 		= "pegawai/data_peg.php";
        $ambiljs0	= "assets/js/jquery.2.1.1.min.js";
        $ambilfungsi	= "config/fungsi_dafpeg.php";
        $ambiljs2	= "assets/js/jquery.dataTables.min.js";
        $ambiljs3	= "assets/js/jquery.dataTables.bootstrap.js";
    } elseif ($id == "data_absen") {
        $nav 		= "Data Absen Pegawai";
        $ambil 		= "pegawai/data_a.php";
        $ambiljs0	= "assets/js/jquery.2.1.1.min.js";
    } elseif ($id == "proses_pay") {
        $nav 		= "Proses Payrol";
        $ambil 		= "payroll/proses_p.php";
        $ambiljs0	= "assets/js/jquery.2.1.1.min.js";
    } elseif ($id == "tambahpeg") {
        $nav 		= "Tambah Pegawai";
        $ambil 		= "pegawai/tmbh_peg.php";
        $ambilcss1	= "assets/css/jquery-ui.custom.min.css";
        $ambilcss2	= "assets/css/chosen.css";
        $ambilcss3	= "assets/css/datepicker.css";
        $ambilcss4	= "assets/css/bootstrap-timepicker.css";
        $ambilcss5	= "assets/css/daterangepicker.css";
        $ambilcss6	= "assets/css/bootstrap-datetimepicker.css";
        $ambilcss7	= "assets/css/colorpicker.css";
        $ambilcss8	= "";
        $ambilcss9	= "";
        $ambilcss10	= "";
        $ambiljs0	= "assets/js/jquery.2.1.1.min.js";
        $ambiljs1	= "";
        $ambiljs2	= "assets/js/chosen.jquery.min.js";
        $ambiljs3	= "assets/js/date-time/bootstrap-datepicker.min.js";
        $ambiljs4	= "assets/js/date-time/bootstrap-timepicker.min.js";
        $ambiljs5	= "assets/js/date-time/moment.min.js";
        $ambiljs6	= "assets/js/date-time/daterangepicker.min.js";
        $ambiljs7	= "assets/js/date-time/bootstrap-datetimepicker.min.js";
        $ambiljs8	= "assets/js/bootstrap-colorpicker.min.js";
        $ambiljs9	= "assets/js/jquery.autosize.min.js";
        $ambiljs10	= "assets/js/jquery.inputlimiter.1.3.1.min.js";
        $ambiljs11	= "assets/js/jquery.maskedinput.min.js";
        $ambiljs12	= "assets/js/typeahead.jquery.min.js";
        $ambilfungsi	= "config/fungsi_tmbhpeg.php";
    } elseif ($id == "set") {
        $nav 		= "Setting";
        $ambil 		= "setting.php";
        $ambiljs0	= "assets/js/jquery.2.1.1.min.js";
    } else {
        $nav 		= "Dashboard";
        $ambil 		= "home.php";
        $ambilcss1	= "assets/css/jquery-ui.custom.min.css";
        $ambilcss2	= "";
        $ambiljs0	= "assets/js/jquery-1.8.3.min.js";
        $ambiljs1	= "assets/js/sts.js";
        $ambiljs2	= "";
        $ambilfungsi	= "config/fungsi_status.php";
    }

    $id_user=$_SESSION['kode'];
    $nip=$_SESSION['nip'];
    $sesi_username = isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
    if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'  ) 

    {

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Dashboard - ASKA Admin</title>

	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.1.0/css/font-awesome.min.css" />
	
	<link rel="stylesheet" href="<?php echo $ambilcss1; ?>" />
	<link rel="stylesheet" href="<?php echo $ambilcss2; ?>" />
	<link rel="stylesheet" href="<?php echo $ambilcss3; ?>" />
	<link rel="stylesheet" href="<?php echo $ambilcss4; ?>" />
	<link rel="stylesheet" href="<?php echo $ambilcss5; ?>" />
	<link rel="stylesheet" href="<?php echo $ambilcss6; ?>" />
	<link rel="stylesheet" href="<?php echo $ambilcss7; ?>" />
	<link rel="stylesheet" href="<?php echo $ambilcss8; ?>" />
	<link rel="stylesheet" href="<?php echo $ambilcss9; ?>" />
	<link rel="stylesheet" href="<?php echo $ambilcss10; ?>" />

	<!-- page specific plugin styles -->

	<!-- text fonts -->
	<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" id="main-ace-style" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
	<![endif]-->
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
<style>

		.preload-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
    background-color:#000;opacity:0.4;filter:alpha(opacity=40);
}
#preloader_7 {
    display: block;
    position: relative;
    left: 50%;
    top: 50%;
    width: 150px;
    height: 150px;
    margin: -75px 0 0 -75px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #3498db;

    -webkit-animation: spin 2s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
    animation: spin 2s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */

    z-index: 1001;
}

    #preloader_7:before {
        content: "";
        position: absolute;
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #e74c3c;

        -webkit-animation: spin 3s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 3s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    #preloader_7:after {
        content: "";
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #f9c922;

        -webkit-animation: spin 1.5s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
          animation: spin 1.5s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    @-webkit-keyframes spin {
        0%   { 
            -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);  /* IE 9 */
            transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
        }
        100% {
            -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);  /* IE 9 */
            transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
        }
    }
    @keyframes spin {
        0%   { 
            -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);  /* IE 9 */
            transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
        }
        100% {
            -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);  /* IE 9 */
            transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
        }
    }

	</style>
	<!--[if lte IE 9]>
	<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
	<![endif]-->

	<!-- inline styles related to this page -->

	<!-- ace settings handler -->
	<script src="assets/js/ace-extra.min.js"></script>
	<script src="assets/js/time.js" type="text/javascript"></script>
	<script src="<?php echo $ambiljs0; ?>"></script>
	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
    <?php include $ambilfungsi2; ?>
	<!--[if lte IE 8]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="skin-3">
<!-- Preloader -->
	<script type="text/javascript">
	
$(window).load(function() { $(".preload-wrapper").fadeOut("slow"); })

	</script>
<div class="preload-wrapper">
    <div id="preloader_7"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
	
</div>
<div id="navbar" class="navbar navbar-default">
<script type="text/javascript">
	try{ace.settings.check('navbar' , 'fixed')}catch(e){}
</script>

<div class="navbar-container" id="navbar-container">
<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
	<span class="sr-only">Toggle sidebar</span>

	<span class="icon-bar"></span>

	<span class="icon-bar"></span>

	<span class="icon-bar"></span>
</button>

<div class="navbar-header pull-left">
	<a href="#" class="navbar-brand">
		<small>
			<i class="fa fa-eye"></i>
			ASKA Admin
		</small>
	</a>
</div>

<div class="navbar-buttons navbar-header pull-right" role="navigation">
<ul class="nav ace-nav">
<li class="grey">
	<a data-toggle="dropdown" class="dropdown-toggle" href="#">
		<i class="ace-icon fa fa-tasks"></i>
		<span class="badge badge-grey">4</span>
	</a>

	<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
		<li class="dropdown-header">
			<i class="ace-icon fa fa-check"></i>
			4 Tasks to complete
		</li>

		<li>
			<a href="#">
				<div class="clearfix">
					<span class="pull-left">Software Update</span>
					<span class="pull-right">65%</span>
				</div>

				<div class="progress progress-mini">
					<div style="width:65%" class="progress-bar"></div>
				</div>
			</a>
		</li>

		<li>
			<a href="#">
				<div class="clearfix">
					<span class="pull-left">Hardware Upgrade</span>
					<span class="pull-right">35%</span>
				</div>

				<div class="progress progress-mini">
					<div style="width:35%" class="progress-bar progress-bar-danger"></div>
				</div>
			</a>
		</li>

		<li>
			<a href="#">
				<div class="clearfix">
					<span class="pull-left">Unit Testing</span>
					<span class="pull-right">15%</span>
				</div>

				<div class="progress progress-mini">
					<div style="width:15%" class="progress-bar progress-bar-warning"></div>
				</div>
			</a>
		</li>

		<li>
			<a href="#">
				<div class="clearfix">
					<span class="pull-left">Bug Fixes</span>
					<span class="pull-right">90%</span>
				</div>

				<div class="progress progress-mini progress-striped active">
					<div style="width:90%" class="progress-bar progress-bar-success"></div>
				</div>
			</a>
		</li>

		<li class="dropdown-footer">
			<a href="#">
				See tasks with details
				<i class="ace-icon fa fa-arrow-right"></i>
			</a>
		</li>
	</ul>
</li>

<li class="purple">
	<a data-toggle="dropdown" class="dropdown-toggle" href="#">
		<i class="ace-icon fa fa-bell icon-animated-bell"></i>
		<span class="badge badge-important">8</span>
	</a>

	<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
		<li class="dropdown-header">
			<i class="ace-icon fa fa-exclamation-triangle"></i>
			8 Notifications
		</li>

		<li>
			<a href="?id=list_user">
				<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
												Userid Pegawai Baru
											</span>
					<span class="pull-right badge badge-info">+12</span>
				</div>
			</a>
		</li>

		<li>
			<a href="#">
				<i class="btn btn-xs btn-primary fa fa-user"></i>
				Bob just signed up as an editor ...
			</a>
		</li>

		<li>
			<a href="#">
				<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
												Permintaan Cuti
											</span>
					<span class="pull-right badge badge-success">+8</span>
				</div>
			</a>
		</li>

		<li>
			<a href="#">
				<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
												Followers
											</span>
					<span class="pull-right badge badge-info">+11</span>
				</div>
			</a>
		</li>

		<li class="dropdown-footer">
			<a href="#">
				See all notifications
				<i class="ace-icon fa fa-arrow-right"></i>
			</a>
		</li>
	</ul>
</li>

<li class="green">
	<a data-toggle="dropdown" class="dropdown-toggle" href="#">
		<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
<?php		
						
$count1=mysql_query("select count(sudahbaca)as jum2 from tabel_pesan where sudahbaca='N' and kepada='$id_user' ");
while($row5=mysql_fetch_array($count1)){
?>
		<span class="badge badge-success"><?php echo $row5['jum2'];?></span>
<?php
}
?>
	</a>

	<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
		<li class="dropdown-header">
<?php		
					
$count=mysql_query(" select count(kepada)as jum from tabel_pesan where kepada='$id_user' and sudahbaca='N'");
while($row4=mysql_fetch_array($count)){
?>
			<i class="ace-icon fa fa-envelope-o"></i>
			<?php echo $row4['jum'];?> Messages
		</li>
<?php
}
?>

<?php								
$pesan=mysql_query("select tabel_pesan.waktu,dari,tbl_user.username as kepada,pesan,tbl_user.photo, sudahbaca from tabel_pesan,tbl_user where kepada='$id_user' and tabel_pesan.dari=tbl_user.username GROUP BY dari order by waktu asc ");
while($row3=mysql_fetch_array($pesan)){
?>
		<li class="dropdown-content">
			<ul class="dropdown-menu dropdown-navbar">
				<li>
					<a href="#">
						<img src="<?php echo $row3['photo'];?>" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue"><?php echo $row3['dari'];?>:</span>
														<?php echo $row3['pesan'];?>
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span><?php echo $row3['waktu'];?></span>
													</span>
												</span>
					</a>
				</li>
				
			</ul>
		</li>
<?php
}
?>
		<li class="dropdown-footer">
			<a href="?id=msg">
				See all messages
				<i class="ace-icon fa fa-arrow-right"></i>
			</a>
		</li>
	</ul>
</li>

<li class="light-blue">
	<a data-toggle="dropdown" href="#" class="dropdown-toggle">
		<img class="nav-user-photo" src="<?php echo $_SESSION['photo'];?>" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $_SESSION['namauser'];?>
								</span>

		<i class="ace-icon fa fa-caret-down"></i>
	</a>

	<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
		<li>
			<a href="?id=set">
				<i class="ace-icon fa fa-cog"></i>
				Settings
			</a>
		</li>

		<li>
			<a href="?id=profil">
				<i class="ace-icon fa fa-user"></i>
				Profile
			</a>
		</li>

		<li class="divider"></li>

		<li>
			<a href="logout.php" id="logout" onclick="return confirm('Apakah Anda yakin?')">
				<i class="ace-icon fa fa-power-off"></i>
				Logout
			</a>
		</li>
	</ul>
</li>
</ul>
</div>
</div><!-- /.navbar-container -->
</div>



<!-- basic scripts -->

<!--[if !IE]> -->




<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

<!--[if IE]>
<script type="text/javascript">
	window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="<?php echo $ambiljs1; ?>"></script>
<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>


<script src="<?php echo $ambiljs2; ?>"></script>
<script src="<?php echo $ambiljs3; ?>"></script>
<script src="<?php echo $ambiljs4; ?>"></script>
<script src="<?php echo $ambiljs5; ?>"></script>
<script src="<?php echo $ambiljs6; ?>"></script>
<script src="<?php echo $ambiljs7; ?>"></script>
<script src="<?php echo $ambiljs8; ?>"></script>
<script src="<?php echo $ambiljs9; ?>"></script>
<script src="<?php echo $ambiljs10; ?>"></script>
<script src="<?php echo $ambiljs11; ?>"></script>
<script src="<?php echo $ambiljs12; ?>"></script>



<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<?php include $ambilfungsi; ?>
<!-- inline scripts related to this page -->

</body>
</html>
<?php
}else{
	session_destroy();
	header('Location:index.php?status=Silahkan Login');
}
?>	