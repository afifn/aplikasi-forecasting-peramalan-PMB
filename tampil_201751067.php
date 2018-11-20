<?php
extract ($_GET);
extract($_POST);
include "koneksi_201751067.php";
error_reporting(0)
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>201751067 - Afif Nor Yusuf</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
  <div id="right-panel" class="right-panel">

          <!-- Header-->
          <header id="header" class="header">
              <div class="top-left">
                  <div class="navbar-header">
                     <a class="navbar-brand" alt="Logo">Administrator</a>
                      <a class="navbar-brand hidden" href="./"><img src="images/afif.jpg" alt="Logo"></a>
                      <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                  </div>
              </div>
              <div class="top-right">
                  <div class="header-menu">
                      <div class="header-left">
                          <button class="search-trigger"><i class="fa fa-search"></i></button>
                          <div class="form-inline">
                              <form class="search-form">
                                  <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                  <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                              </form>
                          </div>

                          <div class="dropdown for-notification">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-bell"></i>
                                  <span class="count bg-danger">3</span>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="notification">
                                  <p class="red">You have 3 Notification</p>
                                  <a class="dropdown-item media" href="#">
                                      <i class="fa fa-check"></i>
                                      <p>Server #1 overloaded.</p>
                                  </a>
                                  <a class="dropdown-item media" href="#">
                                      <i class="fa fa-info"></i>
                                      <p>Server #2 overloaded.</p>
                                  </a>
                                  <a class="dropdown-item media" href="#">
                                      <i class="fa fa-warning"></i>
                                      <p>Server #3 overloaded.</p>
                                  </a>
                              </div>
                          </div>

                          <div class="dropdown for-message">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-envelope"></i>
                                  <span class="count bg-primary">4</span>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="message">
                                  <p class="red">You have 4 Mails</p>
                                  <a class="dropdown-item media" href="#">
                                      <span class="photo media-left"><img alt="avatar" src="http://a.id/komunitasdistro/assets/images/avatar/1.jpg"></span>
                                      <div class="message media-body">
                                          <span class="name float-left">Jonathan Smith</span>
                                          <span class="time float-right">Just now</span>
                                          <p>Hello, this is an example msg</p>
                                      </div>
                                  </a>
                                  <a class="dropdown-item media" href="#">
                                      <span class="photo media-left"><img alt="avatar" src="http://a.id/komunitasdistro/assets/images/avatar/2.jpg"></span>
                                      <div class="message media-body">
                                          <span class="name float-left">Jack Sanders</span>
                                          <span class="time float-right">5 minutes ago</span>
                                          <p>Lorem ipsum dolor sit amet, consectetur</p>
                                      </div>
                                  </a>
                                  <a class="dropdown-item media" href="#">
                                      <span class="photo media-left"><img alt="avatar" src="http://a.id/komunitasdistro/assets/images/avatar/3.jpg"></span>
                                      <div class="message media-body">
                                          <span class="name float-left">Cheryl Wheeler</span>
                                          <span class="time float-right">10 minutes ago</span>
                                          <p>Hello, this is an example msg</p>
                                      </div>
                                  </a>
                                  <a class="dropdown-item media" href="#">
                                      <span class="photo media-left"><img alt="avatar" src="http://a.id/komunitasdistro/assets/images/avatar/4.jpg"></span>
                                      <div class="message media-body">
                                          <span class="name float-left">Rachel Santos</span>
                                          <span class="time float-right">15 minutes ago</span>
                                          <p>Lorem ipsum dolor sit amet, consectetur</p>
                                      </div>
                                  </a>
                              </div>
                          </div>
                      </div>

                      <div class="user-area dropdown float-right">
                          <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img class="user-avatar rounded-circle" src="images/afif.jpg" alt="User Avatar">
                          </a>

                          <div class="user-menu dropdown-menu">
                              <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                              <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                              <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                              <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                          </div>
                      </div>
                  </div>
              </div>
          </header>
  <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"<class="menu-icon"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <!--<li class="menu-title">UI elements</li>--><!-- /.menu-title -->
                    <li>
                        <a href="input_201751067.php"<class="menu-icon"><i class="menu-icon fa fa-wheelchair"></i>Input PMB</a>
                    </li>
                    <li class="active">
                        <a href="tampil_201751067.php"<class="menu-icon"><i class="menu-icon fa fa-users"></i>Tampil Data</a>
                    </li>
                    <li>
                        <a href="prediksi_201751067.php"<class="menu-icon"> <i class="menu-icon fa fa-bar-chart"></i>Prediksi</a>
                    </li>

                    <!--<li class="menu-title">Icons</li>--><!-- /.menu-title -->

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Afif Nor Yusuf</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                  <li class="active">201751067</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
          <div class="animated fadeIn">
            <!-- 2colom -->
            <div class="row">
                    <div class="col-lg-8">
                        <section class="card">
                          <div class="card-header">
                            <strong class="card-title">Tampil Data</strong>
                          </div>
                          <div class="card-body">
                            <div id="tampil">
                              <table class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Tahun Akademik</th>
                                    <th scope="col">Jumlah PMB</th>
                                    <th scope="col">X</th>
                                    <th scope="col">Y</th>
                                    <th scope="col">XX</th>
                                    <th scope="col">XY</th>
                                  </tr>
                                </thead>
                                  <tbody>
                                  <?php
                                    $con=mysqli_connect("localhost","root","","db201751067");
                                        if (mysqli_connect_errno()) {
                                            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
                                        };
                                      $sql = mysqli_query($con, "SELECT * FROM pmb_201751067") or die (mysqli_error($con));
                                    //  if (mysqli_num_error($sql) > 0) {
                                        // code...
                                        {
                                        $x = 0;
                                        $jumlah_x = 0;
                                        $jumlah_y = 0;
                                        $jumlah_xx = 0;
                                        $jumlah_xy = 0;
                                        while ($data = mysqli_fetch_array($sql)) {
                                              $jumlah_x += $x;
                                              $jumlah_y += $data['jumlah_pmb'];
                                              $jumlah_xx += ($x * $x);
                                              $jumlah_xy += ($x * $data['jumlah_pmb']);
                                            ?>
                                            <tr>
                                              <td><?=$x+1;?>.</td>
                                              <td><?=$data['periode_pmb'];?></td>
                                              <td align="left"><?=$data['jumlah_pmb'];?></td>
                                              <td align="left"><?=$x;?></td>
                                              <td align="left"><?=$data['jumlah_pmb'];?></td>
                                              <td align="left"><?=$x * $x;?></td>
                                              <td align="left"><?=$x * $data['jumlah_pmb'];?></td>
                                            </tr>
                                            <?php
                                            $x++;
                                          }
                                          ?>
                                          <tr>
                                            <td colspan="2">Jumlah</td>
                                            <td></td>
                                            <td><?=$jumlah_x;?></td>
                                            <td><?=$jumlah_y;?></td>
                                            <td><?=$jumlah_xx;?></td>
                                            <td><?=$jumlah_xy;?></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">Rata2</td>
                                            <td></td>
                                            <td>
                                              <?php
                                              $rata2_x = $jumlah_x / $x;
                                              echo $rata2_x;
                                              ?>
                                            </td>
                                            <td>
                                              <?php
                                              $rata2_y = $jumlah_y / $x;
                                              echo $rata2_y;
                                              ?>
                                            </td>
                                            <td colspan="2"></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">B1</td>
                                            <td colspan="6">
                                              <?php
                                              $b1 = ($jumlah_xy - (($jumlah_x * $jumlah_y) / $x)) / ($jumlah_xx - ($jumlah_x * $jumlah_x) / $x);
                                              echo $b1;
                                              ?>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">B0</td>
                                              <td colspan="6">
                                                <?php
                                                $b0 = $rata2_y - $b1 * $rata2_x;
                                                echo $b0;
                                                ?>
                                              </td>
                                            </tr>
                                            <?php
                                          }
                                          ?>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </section>
                              </div>

                    <div class="col-lg-4 ">
                        <section class="card bg-danger">

                            <div class="card-body">
                          <div class="text-light">
                            Rumus Regresi Linier :<br>
                            <?php
                            $y = $b0." + ".$b1." x";
                            echo $y;
                            ?>
                          </div>
                          <?php
                          if (isset($_POST['prediksi'])) {
                            $periode_pmb = $_POST['periode_pmb'];
                            $thn = ($x - 1) + $periode_pmb;
                            $prediksi = $b0 + ($b1 * $thn);
                            ?>
                            <div class="text-light">
                              Prediksi PMB untuk <?=$periode_pmb;?> tahun berikunya adalah <?=$prediksi;?>
                            </div>
                            <?php
                          }
                          ?>
                        </div>
                    </section>
                  </div>
                </div>
                <!-- 2colom-->
        <!--    <div class="row">
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Tampil Data</strong>
                  </div>
                  <div class="card-body">
                    <div id="tampil">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tahun Akademik</th>
                            <th scope="col">Jumlah PMB</th>
                            <th scope="col">X</th>
                            <th scope="col">Y</th>
                            <th scope="col">XX</th>
                            <th scope="col">XY</th>
                          </tr>
                        </thead>
                          <tbody>
                          <?php
                            $con=mysqli_connect("localhost","root","","db201751067");
                                if (mysqli_connect_errno()) {
                                    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
                                };
                              $sql = mysqli_query($con, "SELECT * FROM pmb_201751067") or die (mysqli_error($con));
                            //  if (mysqli_num_error($sql) > 0) {
                                // code...
                                {
                                $x = 0;
                                $jumlah_x = 0;
                                $jumlah_y = 0;
                                $jumlah_xx = 0;
                                $jumlah_xy = 0;
                                while ($data = mysqli_fetch_array($sql)) {
                                      $jumlah_x += $x;
                                      $jumlah_y += $data['jumlah_pmb'];
                                      $jumlah_xx += ($x * $x);
                                      $jumlah_xy += ($x * $data['jumlah_pmb']);
                                    ?>
                                    <tr>
                                      <td><?=$x+1;?>.</td>
                                      <td><?=$data['periode_pmb'];?></td>
                                      <td align="left"><?=$data['jumlah_pmb'];?></td>
                                      <td align="left"><?=$x;?></td>
                                      <td align="left"><?=$data['jumlah_pmb'];?></td>
                                      <td align="left"><?=$x * $x;?></td>
                                      <td align="left"><?=$x * $data['jumlah_pmb'];?></td>
                                    </tr>
                                    <?php
                                    $x++;
                                  }
                                  ?>
                                  <tr>
                                    <td colspan="2">Jumlah</td>
                                    <td></td>
                                    <td><?=$jumlah_x;?></td>
                                    <td><?=$jumlah_y;?></td>
                                    <td><?=$jumlah_xx;?></td>
                                    <td><?=$jumlah_xy;?></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2">Rata2</td>
                                    <td></td>
                                    <td>
                                      <?php
                                      $rata2_x = $jumlah_x / $x;
                                      echo $rata2_x;
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                      $rata2_y = $jumlah_y / $x;
                                      echo $rata2_y;
                                      ?>
                                    </td>
                                    <td colspan="2"></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2">B1</td>
                                    <td colspan="6">
                                      <?php
                                      $b1 = ($jumlah_xy - (($jumlah_x * $jumlah_y) / $x)) / ($jumlah_xx - ($jumlah_x * $jumlah_x) / $x);
                                      echo $b1;
                                      ?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td colspan="2">B0</td>
                                      <td colspan="6">
                                        <?php
                                        $b0 = $rata2_y - $b1 * $rata2_x;
                                        echo $b0;
                                        ?>
                                      </td>
                                    </tr>
                                    <?php
                                  }
                                  ?>
                                </tbody>
                      </table>
                      <div>
                        Rumus Regresi Linier :<br>
                        <?php
                        $y = $b0." + ".$b1." x";
                        echo $y;
                        ?>
                      </div>
                      <?php
                      if (isset($_POST['prediksi'])) {
                        $periode_pmb = $_POST['periode_pmb'];
                        $thn = ($x - 1) + $periode_pmb;
                        $prediksi = $b0 + ($b1 * $thn);
                        ?>
                        <div>
                          Prediksi PMB untuk <?=$periode_pmb;?> tahun berikunya adalah <?=$prediksi;?>
                        </div>
                        <?php
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div class="clearfix"></div>
        <?php include "assets/footer.php" ?>
      </div><!-- /#right-panel -->
      <!-- Right Panel -->
      <!-- Scripts -->
      <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
      <script src="assets/js/lib/data-table/datatables.min.js"></script>
      <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
      <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
      <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
</body>
</html>
