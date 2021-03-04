<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <link rel="icon" type="image/png" href="../img/07-11-20161Logo-MOPH-DMH-RICD-small.png"> -->
    <title>แบบสำรวจวัดระดับความพึงพอใจ</title>

    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Tables data -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="../assets/plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:250,400,400i,700" rel="stylesheet" />
    <!-- animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;300&display=swap" rel="stylesheet">

</head>

<style>
    .btnmenu {
        color: #FFF !important;
        opacity: 0.7;
        cursor: pointer;
        padding-left: 39px;
    }

    .btnmenu:hover {
        opacity: 1;
    }

    .nav-item-box {
        position: relative;
        cursor: pointer;
        /* display: none; */
    }

    .nav-link-box,
    .divMenu {
        color: #fff !important;

    }

    .nav-link-box:hover,
    .divMenu:hover {
        opacity: 0.7;
    }

    .divMenu {
        width: 100%;
    }

    .atv-menu {
        background-color: #070809;
        opacity: 1;
    }

    .btn-danger.disabled,
    .btn-danger:disabled {
        background-color: green;
    }

    body {
        font-family: 'Sarabun', cursive !important;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light  bg-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link text-white">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <!-- Notifications Dropdown Menu -->
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu open">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="../img/icon-admin-18.jpg" class="img-circle elevation-2 path_image" alt="User Image" style="width: 50px; height: 50px;" />
                                <span class="text-light F_name"></span>
                                <span class="text-light L_name"></span>
                            </a>
                            <ul class="dropdown-menu shadow-lg bg-white rounded" style="padding: 1px;  margin-top: 15px;">

                                <li class="user-header bg-light-blue">
                                    <img src="../img/icon-admin-18.jpg" class="img-circle elevation-2 path_image" alt="User Image" style="width: 70px; height: 70px;" />
                                    <p>
                                        สถาบันพัฒนาการเด็กราชนครินทร์
                                        <small style="font-size: 0.5em;">แบบสำรวจวัดระดับความพึงพอใจ</small>
                                    </p>
                                </li>

                                <li class="user-footer">
                                    <div class="pull-left">
                                        <div class="row">
                                            <div id="profile" class="profile btn btn-outline-success col-md-4">ProFile</div>
                                            <div id="logout" onclick="logout()" class="btn btn-outline-danger col-md-4 offset-md-4">Log Out
                                            </div>
                                        </div>
                                    </div>
                            </ul>
                        </li>
                    </ul>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4  bg-dark text-white">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <!-- <img src="../img/icon-admin-18.jpg" class="brand-image img-circle elevation-3" style="opacity: 1" /> -->
                <span class="brand-text font-weight-light text-center" style="font-size: 0.8em;">แบบสำรวจวัดระดับความพึงพอใจ</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex profile">
                    <div class="image">
                        <img src="../img/icon-admin-18.jpg" class="img-circle elevation-2 path_image" alt="User Image" />
                    </div>
                    <div class="info">
                        <span class="text-light F_name"><i class="caret"></i></span>
                        <span class="text-light L_name"><i class="caret"></i></span>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2  bg-dark text-white">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                        <!-- <li class="nav-item-box  menu-admin" id="nav-item-box-1">
                            <div class="nav-link nav-link-box" status="1">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p> สมาชิก
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </div>
                            <ul class="nav nav-treeview-box" style="display: none;">

                                <div class="nav-link divMenu btnmenu" attr_link="add_member.html">
                                    <i class=" nav-icon fas fa-angle-right"></i>
                                    <p>เพิ่มสมาชิก</p>
                                </div>

                            </ul>
                            <ul class="nav nav-treeview-box" style="display: none;">

                                <div class="nav-link divMenu btnmenu" attr_link="upde_data.html">
                                    <i class=" nav-icon fas fa-angle-right"></i>
                                    <p>แก้ไข/ลบ</p>

                                </div>

                            </ul>
                        </li> -->

                        <!-- <li class="nav-item-box menu-admin" id="nav-item-box-2">
                            <div class="nav-link nav-link-box" status="2">
                                <i class=" nav-icon fas fa-gamepad"></i>
                                <p>ของเล่น
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </div>
                            <ul class="nav nav-treeview-box" style="display: none;">

                                <div class="nav-link divMenu btnmenu" attr_link="add_toy.html">
                                    <i class=" nav-icon fas fa-angle-right"></i>
                                    <p>เพิ่มของเล่น</p>
                                </div>

                            </ul>
                            <ul class="nav nav-treeview-box" style="display: none;">

                                <div class="nav-link divMenu btnmenu" attr_link="toy_data.html">
                                    <i class=" nav-icon fas fa-angle-right"></i>
                                    <p>ข้อมูลของเล่น</p>
                                </div>

                            </ul>
                        </li> -->

                        <!-- <li class="nav-item-box menu-admin" id="nav-item-box-3">
                            <div class="nav-link nav-link-box" status="3">
                                <i class=" nav-icon fas fa-archive"></i>
                                <p>คลัง
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </div>
                            <ul class="nav nav-treeview-box" style="display: none;">

                                <div class="nav-link divMenu btnmenu" attr_link="treasury_adde.html">
                                    <i class=" nav-icon fas fa-angle-right"></i>
                                    <p>เพิ่ม/แก้ไข จำนวน</p>
                                </div>

                            </ul>
                        </li> -->

                        <!-- <li class="nav-item-box menu-user menu-admin" id="nav-item-box-4">
                            <div class="nav-link nav-link-box" status="4">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    ยืมหนังสือ/อุปกรณ์
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </div>
                            <ul class="nav nav-treeview-box" style="display: none;">

                                <div class="nav-link divMenu btnmenu" attr_link="borrow.html">
                                    <i class="nav-icon fas fa-angle-right"></i>
                                    <p>ยืม</p>
                                </div>

                                <div class="nav-link divMenu btnmenu" attr_link="reborrow.html">
                                    <i class="nav-icon fas fa-angle-right "></i>
                                    <p>คืน</p>
                                </div>

                            </ul>
                        </li> -->
                        <!-- /ตัวเพิ่ม -->

                        <li class="nav-item-box menu-admin" id="nav-item-box-5">

                            <div class="nav-link nav-link-box divMenu" attr_link="report.php" status="5">
                                <i class=" nav-icon fas fa-archive"></i>
                                <p>รายงาน </p>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->
            <section>
                <!-- Main content -->
                <div class="content">
                    <div id="showContent"></div>
                    <!-- The Modal -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- แจ่งเตือน -->
        <div class="boxAlert">

        </div>

    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019
            <a href="https://ricd.go.th/">RICD.GO.TH </a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.5
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- Jspdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.0/jspdf.min.js"></script>
    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../assets/plugins/sparklines/sparkline.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../assets/plugins/moment/moment.min.js"></script>
    <script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../assets/dist/js/demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!--- Date moment !--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <!--- scripJS !--->
    <!-- bs-custom-file-input -->
    <script src="../assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <!-- java sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.3/dist/JsBarcode.all.min.js"></script>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>
<script src="../controller/menu.js"></script>

</html>