<?php include('includes/header.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php include('includes/navbar.php') ?>
        <?php include('includes/sidebar.php') ?>
        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Certificate of Residency</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Certificate</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__wobble" src="dist/img/MABINI SEAL.PNG" height="80" width="80">
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">List Of Residency</h3>
                                </div>
                                <div class="card-body">
                                    <table id="residentsTable" class="table table-bordered table-striped">
                                      <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Sitio</th>
                                                <th>Gender</th>
                                                <th>Age</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                
                                        <tbody>
                                            <tr>
                                                <td>Segui, Robert B.</td>
                                                <td>-</td>
                                                <td>Centro</td>
                                                <td>Male</td>
                                                <td>24</td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a> <a class="btn btn-danger btn-sm">
                                                        <i class="fas fa-solid fa-trash-can btn-flat mr-1"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                      
                                            <tr>
                                                <td>Diginiba, Natoy C.</td>
                                                <td>-</td>
                                                <td>Bahay Nayon</td>
                                                <td>Male</td>
                                                <td>26</td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i>
                                                    </a> <a class="btn btn-danger btn-sm">
                                                        <i class="fas fa-solid fa-trash-can btn-flat mr-1"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div id="dialog" class="modal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Print</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/scripts.php'); ?>

    <script>

      

        $(document).ready(function() {
             $('#residentsTable').setupDataTable();
         });
    </script>


</body>

</html>