<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Wadah Foundation</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/external-style.css">
    <link href="plugin/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="index.php">Wadah Foundation</a></h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="index.php" id="dashboard"><i class="fas fa-fw fa-tachometer-alt mr-2"></i>Dashboard</a>
                </li>
                <li>
                    <a href="#rekapData" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-database mr-2"></i><span>Data</span></a>
                    <ul class="collapse list-unstyled" id="rekapData">
                        <div class="bg-white py-2 mx-2 collapse-inner rounded">
                        <li>
                          <a href="data-pendidikan.php">Pendidikan</a>
                        </li>
                        <li>
                          <a href="#">Kesehatan & Sosial</a>
                        </li>
                        <li>
                          <a href="#">PEM</a>
                        </li>
                        </div>
                    </ul>
                </li>
                <li>
                    <a href="#pendidikan" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-chalkboard-teacher mr-2"></i><span>Pendidikan</span></a>
                    <ul class="collapse list-unstyled" id="pendidikan">
                        <div class="bg-white py-2 mx-2 collapse-inner rounded">
                        <li>
                            <a href="pendidikan-paud.php">PAUD</a>
                        </li>
                        <li>
                            <a href="#">Pendar</a>
                        </li>
                        </div>
                    </ul>
                </li>
                <li>
                    <a href="#kesehatansosial" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-weight mr-2"></i><span>Kesehatan & Sosial</span></a>
                    <ul class="collapse list-unstyled" id="kesehatansosial">
                        <div class="bg-white py-2 mx-2 collapse-inner rounded">
                        <li>

                        </li>
                        </div>
                    </ul>
                </li>
                <li>
                    <a href="#pem" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-database mr-2"></i><span>PEM</span></a>
                    <ul class="collapse list-unstyled" id="pem">
                        <div class="bg-white py-2 mx-2 collapse-inner rounded">
                        <li>
                        </li>
                        </div>
                    </ul>
                </li>
                <li>
                    <a href="#listData" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-list mr-2"></i><span>List Data</span></a>
                    <ul class="collapse list-unstyled" id="listData">
                        <div class="bg-white py-2 mx-2 collapse-inner rounded">
                        <li> <a href="table.php">Paud</a>
                        </li>
                        <li>
                          <a href="#">Pendar</a>
                        </li>
                        </div>
                    </ul>
                </li>
                
                <li>
                    <a href="#pencarian" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-search mr-2"></i>Pencarian</a>
                    <ul class="collapse list-unstyled" id="pencarian">
                        <div class="bg-white py-2 mx-2 collapse-inner rounded">
                        <li>
                            <a href="#" id="dinamisSearch">Pencarian Dinamis</a>
                        </li>
                        <li>
                            <a href="#" id="listPKMW">List PKMW</a>
                        </li>
                        <li>
                            <a href="inaktif-table.php" id="listInaktif">List Inaktif</a>
                        </li>
                        </div>
                    </ul>
                </li>
                <li>
                    <a href="chart.php"><i class="fas fa-chart-pie"></i> Grafik</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-outline-dark">
                        <i class="fas fa-bars"></i>
                        
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
              <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter -->
                  <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                  <h6 class="dropdown-header">
                    Notifikasi
                  </h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">Data Selesai Studi</div>
                      <span class="font-weight-bold">500 Orang</span>
                    </div>
                  </a>
                  
                  <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
              </li>
              
              <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  Edit Profile
                </a>
                <a class="dropdown-item" href="#">
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  Logout
                </a>
              </div>
            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!--End of Navbar-->
            <!--- Content Section -->
            
            <div class="content" id="dataContent">
    