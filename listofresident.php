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
              <h1>Resident</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Resident</li>
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
                <div class="card-header">

                  <!-- ADD Resident START-->

                  <div class="card-tools">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                      <i class="fas fa-user-plus" aria-hidden="true"></i> Add Resident
                    </button>
                  </div>


                  <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Manage Resident</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                          <!-- THIS IS FOr MODAL FORM IN REGISTRATION (START) -->
                          <!-- SELECT2 EXAMPLE -->
                          <div class="card card-default">
                            <div class="card-body">



                              <div class="row">
                                <div class="col-md-6">
                                  <label>Name:</label>
                                  <div class="row">
                                    <div class="col-5">
                                      <input type="text" class="form-control" placeholder="lastname">
                                    </div>
                                    <div class="col-4">
                                      <input type="text" class="form-control" placeholder="firstname">
                                    </div>
                                    <div class="col-3">
                                      <input type="text" class="form-control" placeholder="M.I">
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->

                                <div class="col-md-6">
                                  <!-- select gender-->
                                  <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control">
                                      <option>Male</option>
                                      <option>Female</option>
                                      <option>Others</option>
                                    </select>
                                  </div>
                                  <!-- /.form-group -->
                                </div>
                                <!-- /.col -->

                                <div class="col-12 col-sm-6">
                                  <div class="form-group">
                                    <label>Birthdate:</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- /.form-group -->
                                </div>
                                <!-- /.col -->

                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Birthplace:</label>
                                      <div class="col-13">
                                        <input type="text" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Barangay:</label>
                                      <select class="form-control">
                                        <option>Brgy. Mabini</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->

                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Sitio:</label>
                                      <select class="form-control">
                                        <option>Españo</option>
                                        <option>Sentro</option>
                                        <option>Bahay Nayon</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Household #:</label>
                                      <div class="col-13">
                                        <input type="text" class="form-control" placeholder="household Id#">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Civil Status:</label>
                                      <select class="form-control">
                                        <option>Single</option>
                                        <option>Married</option>
                                        <option>Solo Parent</option>
                                        <option>Complicated</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Zipcode:</label>
                                      <select class="form-control">
                                        <option>4305</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Total Household Member:</label>
                                      <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10+</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>PWD:</label>
                                      <select class="form-control">
                                        <option>Yes</option>
                                        <option>No</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Blood Type:</label>
                                      <div class="col-13">
                                        <input type="text" class="form-control" placeholder="blood Type">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Position on your family:</label>
                                      <select class="form-control">
                                        <option>Head of the family</option>
                                        <option>Just a family Member</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Relationship to Your Family:</label>
                                      <div class="col-13">
                                        <input type="text" class="form-control" placeholder="(ex. father)">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Occupation:</label>
                                      <div class="col-13">
                                        <input type="text" class="form-control" placeholder="Occupation">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Nationality:"</label>
                                      <input type="text" class="form-control" placeholder="Nationality">
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Religion:</label>
                                      <div class="col-13">
                                        <input type="text" class="form-control" placeholder="religion">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Position:</label>
                                      <div class="col-13">
                                        <select class="form-control">
                                          <option>Resident</option>
                                          <option>Sk Chairman</option>
                                          <option>Brgy. Officials</option>
                                          <option>Brgy. Captain</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label>Remarks:</label>
                                      <div class="col-13">
                                        <input type="text" class="form-control" placeholder="--add remarks here--">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="form-group">
                                      <label for="exampleInputFile">File input</label>
                                      <div class="input-group">
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="exampleInputFile">
                                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                          <span class="input-group-text">Upload</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- /.row -->
                            </div>

                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                          <!-- THIS IS FOR MODAL FORM IN REGISTRATION (END) -->

                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- ADD Resident END-->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                  <form action="">
                    <div class="row mx-5">
                      <div class="col-md-3 col-12 form-group">
                        <label for="query">Resident Name:</label>
                        <input type="text" name="query" class="form-control form-control-sm">
                      </div>
                      <div class="col-md-3 col-12 form-group">
                        <label for="age">Age:</label>
                        <input type="number" name="age" class="form-control form-control-sm">
                      </div>
                      <div class="col-md-3 col-12 form-group">
                        <label for="sitio">Sitio:</label>
                        <select name="sitio" class="form-select form-select-sm">
                          <option>Españo</option>
                          <option>Sentro</option>
                          <option>Bahay Nayon</option>
                        </select>
                      </div>


                      <div class="col-md-3 col-12 form-group d-flex justify-content-end align-items-end">
                        <button type="submit" class="btn btn-warning py-1 w-100"><i class="fa-solid fa-magnifying-glass mr-1"></i>Search</button>
                      </div>
                    </div>
                  </form>

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tbody>
                      <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Sitio</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Option</th>
                      </tr>
                    </tbody>
                    </thead>
                    <thead>
                      <tr>
                        <td>Segui, Robert B.</td>
                        <td>-</td>
                        <td>Centro</td>
                        <td>Male</td>
                        <td>24</td>
                        <td>
                          <a class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a class="btn btn-secondary btn-sm">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                          </a>
                          <a class="btn btn-danger btn-sm">
                            <i class="fas fa-solid fa-trash-can btn-flat"></i>
                          </a>
                        </td>
                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <td>Diginiba, Natoy C.</td>
                        <td>-</td>
                        <td>Bahay Nayon</td>
                        <td>Male</td>
                        <td>26</td>
                        <td>
                          <a class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a class="btn btn-secondary btn-sm">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                          </a>
                          <a class="btn btn-danger btn-sm">
                            <i class="fas fa-solid fa-trash-can btn-flat"></i>
                          </a>
                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <td>Diginiba, Natoy C.</td>
                        <td>-</td>
                        <td>Bahay Nayon</td>
                        <td>Male</td>
                        <td>26</td>
                        <td>
                          <a class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a class="btn btn-secondary btn-sm">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                          </a>
                          <a class="btn btn-danger btn-sm">
                            <i class="fas fa-solid fa-trash-can btn-flat"></i>
                          </a>
                        </td>
                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <td>Diginiba, Natoy C.</td>
                        <td>-</td>
                        <td>Bahay Nayon</td>
                        <td>Male</td>
                        <td>26</td>
                        <td>
                          <a class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a class="btn btn-secondary btn-sm">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                          </a>
                          <a class="btn btn-danger btn-sm">
                            <i class="fas fa-solid fa-trash-can btn-flat"></i>
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

  <script>
    $(function() {
      $("#residentsTable").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#residentsTable_wrapper .col-md-6:eq(0)');
    });
  </script>
</body>

</html>