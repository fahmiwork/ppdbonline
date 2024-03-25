<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                    <a href="index.php"><img src="assets/images/sc.jpg" alt="logo" width="100%"></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
							<li class="<?php if ($page=='home'){echo 'active';} else {echo '';} ?>"><a href="dashboard_user.php"><i class="ti-dashboard"></i><span>Dashboard</span></a></li>
                            <li class="<?php if ($page=='daftar'){echo 'active';} else {echo '';} ?>">
                                <a href="pendaftaran.php"><i class="ti-layout"></i><span>Input Data Pendaftaran</span></a>
                            </li>
                            
                            
                            <li class="<?php if ($page=='lihat'){echo 'active';} else {echo '';} ?>">
                                <a href="lihat_data.php"><i class="ti-layout"></i><span>Lihat Data</span></a>
                            </li>

                            <?php


if(isset($_SESSION['no_pendaftar'])) {
    echo '<li>
    <a href="print_calon.php"><i class="ti-layout"></i><span>Cetak Data Pendaftaran</span></a>
</li>';
} else {
    echo "";
}
?>

                            
                            <li>
                                <a href="./aksilogin/logout.php"><span>Logout</span></a>
                                
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>