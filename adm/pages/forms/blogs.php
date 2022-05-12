<?php 
session_start();
if(!isset($_SESSION['username'])){
  header("location:../../index.php");
}else{
include("addblog.php");
include("include.php");

if(isset($_GET['action']) && $_GET['action']!=''){
  $action=mysqli_real_escape_string($conn,$_GET['action']);
  if($action=='delete'){
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "UPDATE blogs SET is_delete = '1' WHERE id='$id'";
    mysqli_query($conn,$sql);
  }
  if($action=='edit'){
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "UPDATE blogs SET is_delete = '1' WHERE id='$id'";
    mysqli_query($conn,$sql);
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <?php
        //$conn = new mysqli("localhost","mokashi","mokashi@123","mokashi");
        $conn = new mysqli("localhost","u188140722_dentist","Admin@123","u188140722_dentist");
        $sql = "SELECT * FROM blogs WHERE is_delete = '0'";
        $data = mysqli_query($conn, $sql);
    ?>
<div class="wrapper">

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>


  </ul>
</nav>
  <!-- Main Sidebar Container -->
  <?php include("Include/sidebar.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Blogs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blogs </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Blogs</h3>
                <a class="btn btn-primary float-right"  data-toggle="modal" data-target="#modal-primary">Add Blog</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sr.No</th>
                    <th>Title</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php
                      $i = 1;
                      foreach($data as $d){?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $d['title']; ?></td>
                    <td><a class="btn btn-primary editBlog" data="<?php echo $d['id']; ?>" title="Edit Blog"><i class="far fa-edit"></i></a> <a class="btn btn-danger deleteBlog" href="blogs.php?action=delete&id=<?php echo $d['id']; ?>" title="Delete Blog"><i class="far fa-trash-alt"></i></a></td>
                  </tr>
                  <?php
                $i++;
                  } ?>
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
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="tectignis.in/">Tectignis IT Solutions</a>.</strong>
    All rights reserved.
    </div>
  </footer>

</div>
<!-- ./wrapper -->
<div class="modal fade" id="modal-primary">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-default">
      <div class="modal-header">
        <h4 class="modal-title">Add Blog</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <form id="blogForm" method="post" enctype="multipart/form-data">
              <input type="hidden" name="blogId" id="blogId" value="0">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Title" name="title" id="title" >
              </div>
              <div class="form-group">
                <textarea id="shortDesc" name="shortDesc" ></textarea>
              </div>
              <div class="form-group">
                <textarea id="detailDesc" name="detailDesc" ></textarea>
              </div>
              <div class="form-group">
                <input type="file" name="imgBanner" id="imgBanner" >
                <input type="hidden" name="bannerImg" id="bannerImg">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Meta Title" name="metaTitle" id="metaTitle" >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Meta Description" name="metadesc" id="metadesc" >
              </div>
              <div class="row">
                <!-- /.col -->
                <div class="col-4">
                  <input type="submit" class="btn btn-primary sbtbtn" name="addblog" value=
                  "Add Blog">
                  <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">cancel</button>
                  <!--<input type="cancel" class="btn btn-default" value="Cancel">
                  <input type="button" class="btn btn-default"value="Cancel">
                  <button type="submit" class="btn btn-primary sbtbtn">Add Blog</button>
                  <button type="button" class="btn btn-default">Cancel</button>-->
                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- jQuery -->
<?php include("Include/script.php");?>
<script src="assets/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Validate JS -->
<script src="assets/js/jquery.validate.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>
<!-- Sweetalert -->
<script src="assets/js/sweetalert.js"></script>
<script src="assets/js/sweetalert.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/summernote-bs4.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#shortDesc').summernote();
    $('#detailDesc').summernote();
    
  });
</script>
<script>
 $('#blogForm').validate({
        rules: {
            title: {
                required: true,
            },
            shortDesc:{
                required: true,
            },
            detailDesc:{
                required: true,
            }
        },
        messages: {
            title: {
                required: "Please Enter Title",
            },
            shortDesc: {
                required: "Please Enter Short Description",
            },
            detailDesc: {
                required: "Please Enter Detail Description",
            }
        },
        /* submitHandler: function (form) {
          var formData = new FormData(form);
          console.log(formData);
          $.ajax({
            url:'addblog.php',
            method:'POST',
            dataType:'json',
            processData: false,
            contentType: false,
            data:formData,
            success:function(data){
             if(data.status == 200){
              swal({
                  type:"success",
                  title:"Success",
                  text:data.message,
                  closeModal:false,
                  button:"Ok",
                },function(){
                  window.location.href = 'blogs.php';
                })
             }else{
              swal({
                  type:"warning",
                  title:"Warning",
                  text:data.message,
                  closeModal:false,
                  button:"Ok",
                })
             }
            }
          })  
      }
    });
    $(document).on('click','.deleteBlog',function(e){
       e.preventDefault();
       var id = $(this).attr('data');
       $.ajax({
          url:'deleteBlog.php',
          method:'POST',
          dataType:'json',
          data:{id:id},
          success:function(data){
           if(data.status == 200){
             swal({
                type:"success",
                title:"Success",
                text:data.message,
                closeModal:false,
                button:"Ok",
              },function(){
                location.reload();
              })
           }else{
            swal({
                type:"warning",
                title:"Warning",
                text:data.message,
                closeModal:false,
                button:"Ok",
              })
           }
          }
        })*/
    })
    $(document).on('click','.editBlog',function(e){
       e.preventDefault();
       var id = $(this).attr('data');
       $.ajax({
          url:'getBlog.php',
          method:'POST',
          dataType:'json',
          data:{id:id},
          success:function(data){
           if(data.status == 200){
            $('#blogId').val(data.blog[0]);
            $('#title').val(data.blog[1]);
            $('#shortDesc').summernote("code",data.blog[2]);
            $('#detailDesc').summernote("code",data.blog[3]);
            $('#bannerImg').val(data.blog[4]);
            $('#metaTitle').val(data.blog[5]);
            $('#metadesc').val(data.blog[6]);
            $('#modal-primary').modal('show');
           }else{
            swal({
                type:"warning",
                title:"Warning",
                text:data.message,
                closeModal:false,
                button:"Ok",
              })
           }
          }
        })
    })
</script>
</body>
</html>
<?php } ?>