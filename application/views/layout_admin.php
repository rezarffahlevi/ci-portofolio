<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link type="image/x-icon" href="<?=base_url('assets/img/pbp.png')?>" rel="icon" />

    <title>Admin | SMK Informatika Utama</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/css/dashboard.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/dataTables/datatables.min.css')?>" rel="stylesheet">
    <script src="<?=base_url('assets/js/jquery.js')?>"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   <!--  <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SMK Informatika Utama</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right"><!-- 
            <input type="text" class="form-control" placeholder="Search..."> -->
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="<?=base_url('admin')?>">Portofolio</a></li>
            <li><a href="<?=base_url('admin/Slider')?>">Slider</a></li>
            <li><a href="<?=base_url('admin/More')?>">More</a></li>
             <li><a href="<?=base_url('login/logout')?>">Logout</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php $this->load->view($isi); ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --><!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/dataTables/datatables.min.js')?>"></script>
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>


    <!-- Just to make our placeholder images work. Don't actually copy the next line! --><!-- 
    <script src="<?=base_url('assets/js/vendor/holder.min.js')?>"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug --><!-- 
    <script src="<?=base_url('assets/js/ie10-viewport-bug-workaround.js')?>"></script> -->
  </body>
</html>
