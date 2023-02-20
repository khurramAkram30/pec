<?php
session_start();
if(!isset($_SESSION['UserId'])){
    header('location:login.php');
}
include_once ("../conn.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php
include_once("navbar.php");
include_once("sidebar.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Paper-Submission</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Paper-Submission</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SNO</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone No</th>
                  <th>Designation</th>
                  <th>University</th>
                  <th>Country</th>
                  <th>Speaker Conference</th>
                  <th>Short Description</th>
                  <th>Mode Delivery</th>
                  <th>Abstract Paper</th>
                  <th>Committee Members Name</th>
                </tr>
                </thead>
                <tbody>
                <?php
                                                // include_once ("conn.php");
                                                        $sno = 1;
                                                        $sql = "SELECT * FROM `paper_submission`";
                                                        $resultMain = mysqli_query($conn,$sql);
                                                        while($rowMain = mysqli_fetch_assoc($resultMain)){
                                                        echo '
                                                            <tr>
                                                                <td>'.$sno++.'</td>
                                                                <td>'.$rowMain['first_name'].'</td>                 
                                                                <td>'.$rowMain['last_name'].'</td>                 
                                                                <td>'.$rowMain['email'].'</td>                 
                                                                <td>'.$rowMain['phone'].'</td>                 
                                                                <td>'.$rowMain['designation'].'</td>                 
                                                                <td>'.$rowMain['university'].'</td>                 
                                                                <td>'.$rowMain['country'].'</td>                 
                                                                <td>'.$rowMain['speaker_conference'].'</td>                 
                                                                <td>'.$rowMain['short_description'].'</td>                 
                                                                <td>'.$rowMain['mode_delivery'].'</td>                                
                                                                <td>'.$rowMain['abstract_paper'].'</td> 
                                                                
                                                                <td><a href="../uploads/'.$rowMain['abstract_paper'].'" target="_blank">View Document</a></td>
                                                          
                                                                                                             
                                                            </tr>';
                                                        }
                                                        ?>
                                                                                                                     <!-- <td>
                                                                <button class="btn btn-sm btn-info editBtn modal-effec"
                                                                        data-id="'.$rowMain['id'].'"
                                                                        data-bs-effect="effect-newspaper" data-bs-toggle="modal"
                                                                        href="#modaldemo8"> <span class="fe fe-edit"> </span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-danger open-AddBookDialog modal-effec"
                                                                        data-id="'.$rowMain['id'].'"
                                                                        data-bs-effect="effect-newspaper" data-bs-toggle="modal"
                                                                        href="#modaldemo9"> <span class="fe fe-trash-2">
                                                                        </span></button>
                                                                </td> -->
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Copyright &copy; All Rights Reserved Designed by <a href="http://matzsolutions.com">MATZ Solutions</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
    $(document).ready(function() {
        $('a[href="paper-submission.php"]').addClass("active");
    });
    </script>

</body>
</html>
