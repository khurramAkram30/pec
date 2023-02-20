<?php
    session_start();
    include_once ("../conn.php");
    $_SESSION['page_name'] = 'Day_schedule';
    if(!isset($_SESSION['UserId'])){
        header('location:login.php');        
}
        $id=$_GET['updateid'];
        $query="select * from day_schedule where id=$id";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($result);
        $DS_name=$row['DS_name'];
        $DS_date=$row['DS_date'];
        $DS_starttime=$row['DS_starttime'];
        $DS_endtime=$row['DS_endtime'];
        $DS_image=$row['DS_image'];
        // print_r($_REQUEST);
        if(isset($_POST['update'] )){
            $DS_name = $_REQUEST['DS_name'];
            $DS_date =$_REQUEST['DS_date'];
            $DS_starttime= $_REQUEST['DS_starttime'];
            $DS_endtime= $_REQUEST["DS_endtime"];
            $DS_image=$_FILES['DS_image']['name'];
        // $DS_name=$_REQUEST['DS_name'];
        // $DS_date=$_REQUEST['DS_date'];
        // $DS_starttime=$_REQUEST['DS_starttime'];
        // $DS_endtime=$_REQUEST['DS_endtime'];
        // $DS_image=$_REQUEST['DS_image'];
        $update="UPDATE day_schedule SET id = $id, DS_name ='$DS_name', DS_date='$DS_date', DS_starttime='$DS_starttime', DS_endtime='$DS_endtime',DS_image='$DS_image'
        WHERE id=$id";
        $result=mysqli_query($conn,$update);
        if($result){
          $target_dir = "images/";
          $target_file = $target_dir . basename($_FILES["DS_image"]["name"]);  
          if (move_uploaded_file($_FILES["DS_image"]["tmp_name"], $target_file)) {
              // echo "<script>alert('The file ". basename( $_FILES["imagee"]["name"]). " has been uploaded.');</script>";
          }


            echo '<script>
        alert("Record updated sucessfully");
       window.location = "Day_schedule.php";
       </script>';
        }else

        {
        echo "error in query";
        }
        }
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
            <h1>Add Day Schedule</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Schedule</li>
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
            <form action="#" method="POST" enctype="multipart/form-data">
            <div class="row">

                               
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Schedule Name: <span class="text-danger">*</span></label>
                                <input type="text" name="DS_name" class="form-control" value="<?php echo$row['DS_name']?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Date: <span class="text-danger">*</span></label>
                                <input type="date" name="DS_date" class="form-control" value="<?php echo$row['DS_date']?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Start Time: <span class="text-danger">*</span></label>
                                <input type="time" name="DS_starttime" class="form-control" value="<?php echo $row['DS_starttime']?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>End Time: <span class="text-danger">*</span></label>
                                <input type="time" name="DS_endtime" class="form-control"value="<?php echo $row['DS_endtime']?>" >
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Select file: <span class="text-danger">*</span></label>
                                <input type="file" name="DS_image" class="form-control"value="<?php echo $row['DS_image']?>" >
                            </div>
                        </div>
                        </div>

                        <div id="items">


                        </div>
                    
                    <div class="row">
                        <div class="col-3">
                            <input name="addFieldButton" type="button" value="+Add Row" onclick="addField();"
                                class="form-control itembutton">
                        </div>
                        <div class="col-3">
                            <input name="delFieldButton" type="button" value="-Remove Row" onclick="delField();"
                                class="form-control itembutton">
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" id="submitbutton" name="update" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </div>




        </div>
        </form>
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


  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Day Schedule</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Sponsors</li>
            </ol>
          </div> -->
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
                  <th>S.NO</th>
                  <th>Session Name</th>
                  <th>Session Date</th>
                  <th>Start time</th>
                  <th>End time No</th>
                  <th>Image</th>
                  
                  <th>Status</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                                                // include_once ("conn.php");
                                                        
                                                        $sno = 1;
                                                        $sql = "SELECT * FROM `day_schedule`";
                                                        $resultMain = mysqli_query($conn,$sql);
                                                        while($rowMain = mysqli_fetch_assoc($resultMain)){
                                                        $id=$rowMain['id'];
                                                          echo '
                                                            <tr>
                                                                <td>'.$sno++.'</td>
                                                                <td>'.$rowMain['DS_name'].'</td>                 
                                                                <td>'.$rowMain['DS_date'].'</td>                 
                                                                <td>'.$rowMain['DS_starttime'].'</td>                 
                                                                <td>'.$rowMain['DS_endtime'].'</td>                 
                                                                <td>'.$rowMain['DS_image'].'</td>                 
                                                                                                                                            
                                                                <td><a href="update_schedule.php?updateid='.$rowMain['id'].'" class="text-light"><button type="submit" class="btn btn-success" name="update">Update</button></a></td>
                                                                <td><a href="delete_schedule.php?deleteid='.$rowMain['id'].'" class="text-light"><button type ="submit" class="btn btn-danger" name="delete">delete</a></button></a></td>

                                                                
                                                                
                                                               
                                                          
                                                                                    
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
        $('a[href="Day_schedule.php"]').addClass("active");
    });
    </script>







</body>
</html>

<script>
    counter = -1;
    var SNo = 0;

    function addField() {
        counter++;
        SNo++;

        var content = '';
        content += '<div class="row" id="Input_row' + counter + '">';
        
        content += '<div class="col-md-3">';
        content += '     <div class="form-group">';
        content += '         <label>Schedule Name: <span class="text-danger">*</span></label>';
        // content += '            <label>S.N:</label>';
        content += '            <input type="text" name="name[]" class="form-control">';
        content += '        </div>';
        content += '    </div>';
        content += '<div class="col-md-3">';
        content += '     <div class="form-group">';
        content += '         <label>Date: <span class="text-danger">*</span></label>';
        // content += '            <label>S.N:</label>';
        content += '            <input type="date" name="Date[]" class="form-control">';
        content += '        </div>';
        content += '    </div>';
        content += '<div class="col-md-2">';
        content += '     <div class="form-group">';
        content += '         <label>Start Time: <span class="text-danger">*</span></label>';
        // content += '            <label>S.N:</label>';
        content += '            <input type="time" name="startTime[]" class="form-control">';
        content += '        </div>';
        content += '    </div>';
        content += '<div class="col-md-2">';
        content += '     <div class="form-group">';
        content += '         <label>End Time: <span class="text-danger">*</span></label>';
        // content += '            <label>S.N:</label>';
        content += '            <input type="time" name="EndTime[]" class="form-control">';
        content += '        </div>';
        content += '    </div>';
        content += '<div class="col-md-2">';
        content += '     <div class="form-group">';
        content += '         <label>End Time: <span class="text-danger">*</span></label>';
        // content += '            <label>S.N:</label>';
        content += '            <input type="file" name="Img[]" class="form-control">';
        content += '        </div>';
        content += '    </div>';
        content += '    </div>';

        // content += '    <div class="col-md-3">';
        // content += '        <div class="form-group">';
        // content +=
        //     '            <input type="date" name="date[]" id="date" class="form-control" value="<?php echo date('Y-m-d') ?>">';
        // content += '        </div>';
        // content += '    </div>';
        // content += '    <div class="col-md-4">';
        // content += '        <div class="form-group">';
        // content += '            <input type="text" name="description[]" id="description' + counter +
        //     '" class="form-control">';
        // content += '        </div>';
        // content += '    </div>';
        // content += '    <div class="col-md-4">';
        // content += '        <div class="form-group">';
        // content += '            <input type="text" name="accountrecievable[]" id="accountrecievable' + counter +
        //     '" class="form-control">';
        // content += '        </div>';
        // content += '    </div>';
        // content += '</div>';
        content += '<hr>';
        $('#items').append(content);

    }

    function delField() {
        $("#Input_row" + counter).remove();
        counter--;
    }
    </script>

