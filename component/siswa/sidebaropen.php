<nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark navbar-fixed">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">

        </li>
    </ul>
    <a class="navbar-brand" href="#">Dasi</a>

</nav> 

<div class="page-wrapper chiller-theme">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand" id="close-sidebar">
                <a>Tutup</a>
                <div>
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="sidebar-header">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture">
                </div>
                <div class="user-info">
                    <span class="user-name"><?=ucwords($data["nama"])?></span>
                    <span class="user-id"><?=$data["nisn"]?></span>
                    <span class="user-role"><?=$data["level"]?></span>
                </div>
            </div>
            
            <!-- sidebar-search  -->
            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>Menu</span>
                    </li>
                    <li>
                        <a href="dashboard.php">
                            <i class="fa fa-book"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="spp.php">
                            <i class="fa fa-book"></i>
                            <span>Pembayaran SPP</span>
                        </a>
                    </li>
                    <li>
                        <a href="kirim.php">
                            <i class="fa fa-calendar"></i>
                            <span>Kirim Uang</span>
                        </a>
                    </li>
                    <li>
                        <a href="donasi.php">
                            <i class="fa fa-calendar"></i>
                            <span>Donasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="history.php">
                            <i class="fa fa-folder"></i>
                            <span>History</span>
                        </a>
                    </li>                    
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
        <div class="sidebar-footer">
            <a href="pengaturan.php">
                <i class="fa fa-cog"></i>
                <span class="badge-sonar"></span>
            </a>
            <a href="../actions/logout.php">
                <i class="fa fa-power-off"></i>
            </a>
        </div>
    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content"> 
    <div class="container-fluid" id="mainbody">