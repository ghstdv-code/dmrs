<?php include('includes/header.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <?php include('includes/navbar.php') ?>
    <?php include('includes/sidebar.php') ?>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Household</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Household</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
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
                <div class="card-body">
                  <table id="household" class="table table-bordered table-striped">
                    <thead>
                    <tbody>
                      <tr>
                        <th>Head of Family</th>
                        <th>Household #</th>
                        <th>Sitio</th>
                        <th>Total Member</th>
                        <th>Option</th>
                      </tr>
                    </tbody>
                    </thead>
                    <thead>
                      <tr>
                        <td>Segui, Robert B.</td>
                        <td>12345</td>
                        <td>Centro</td>
                        <td>6</td>
                        <td>
                        <a class="btn btn-primary btn-sm">
                            <i class="fas fa-edit mr-1"></i>
                          </a> <a class="btn btn-danger btn-sm">
                            <i class="fas fa-solid fa-trash-can btn-flat mr-1"></i>
                          </a>
                        </td>
                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <td>Diginiba, Natoy C.</td>
                        <td>3456</td>
                        <td>Bahay Nayon</td>
                        <td>5</td>
                        <td><a class="btn btn-primary btn-sm">
                            <i class="fas fa-edit mr-1"></i>
                          </a> <a class="btn btn-danger btn-sm">
                            <i class="fas fa-solid fa-trash-can btn-flat mr-1"></i>
                          </a></td>
                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <td>Diginiba, Natoy C.</td>
                        <td>6789</td>
                        <td>Espano</td>
                        <td>7</td>
                        <td>
                          <a class="btn btn-primary btn-sm">
                            <i class="fas fa-edit mr-1"></i>
                          </a> <a class="btn btn-danger btn-sm">
                            <i class="fas fa-solid fa-trash-can btn-flat mr-1"></i>
                          </a>
                        </td>
                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <td>Diginiba, Natoy C.</td>
                        <td>90123</td>
                        <td>Bahay Nayon</td>
                        <td>4</td>
                        <td>
                          <a class="btn btn-primary btn-sm">
                            <i class="fas fa-edit mr-1"></i>
                          </a> <a class="btn btn-danger btn-sm">
                            <i class="fas fa-solid fa-trash-can btn-flat mr-1"></i>
                          </a>
                        </td>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <?php include('includes/scripts.php') ?>
</body>

</html>