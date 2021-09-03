
<?php 
    /*
    session_start();
    if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
        header("Location: login.php");
        exit();
    }
    */
    include('includes/header.php'); 
    include('includes/navbar.php');
    include('includes/modals.php');
?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Admin_Name Admin_Surname </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-nirox"> Exhibitions </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="dataTable_length">
                                                <button  type="button" class="btn btn-nirox" style="margin-top: 25px" data-toggle="modal" data-target="#addExhibitionModal">
                                                    Add Exhibition
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="dataTable_filter" class="dataTables_filter" style="float: right">
                                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="Serach..." aria-controls="dataTable">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Exhibition
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Artist
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Material
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Year
                                                        </th>
                                                        <th>Info
                                                        </th>
                                                        <th>Delete
                                                        </th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center; vertical-align: middle;">Water proof Forgiveness
                                                        </td>
                                                        <td style="text-align: center; vertical-align: middle;">Youness Atbane
                                                        </td>
                                                        <td style="text-align: center; vertical-align: middle;">
                                                            <ul class="list-group">
                                                                <li class="list-group-item">Cement</li>
                                                                <li class="list-group-item">Enamel</li>
                                                                <li class="list-group-item">Rebar</li>
                                                            </ul>
                                                        </td>
                                                        <td style="text-align: center; vertical-align: middle;">
                                                            2020
                                                        </td>
                                                        <td style="text-align: center; vertical-align: middle;">
                                                            <button class="btn btn-nirox btn-circle btn-lg">
                                                                <i class="fas fa-info-circle"></i>
                                                            </button>
                                                        </td>
                                                        <td style="text-align: center; vertical-align: middle;">
                                                            <button class="btn btn-nirox btn-circle btn-lg">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
<!--
                                                <tfoot>
                                                    <tr>
                                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Exhibition
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Artist
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Material
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Year
                                                        </th>
                                                        <th>Info
                                                        </th>
                                                        <th>Delete
                                                        </th>
                                                    </tr>
                                                </tfoot>
-->

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


<?php
    include('includes/footer.php');
    include('includes/scripts.php');
?>