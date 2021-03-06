<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Asunnonvuokraus</title>
  </head>

  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "asunnon";

    session_start();
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
    ?>           

  <body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="sidebarcolor border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><img src="https://www.stickpng.com/assets/images/585e4bf3cb11b227491c339a.png" alt="user" style="width:100px;"></div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action" style="background-color:#0995ab;color:white;">Presentation</a>
            <a href="#" class="list-group-item list-group-item-action" style="background-color:#0995ab;color:white;">Messages</a>
            <a href="#" class="list-group-item list-group-item-action" style="background-color:#0995ab;color:white;">Role</a>
            <a href="#" class="list-group-item list-group-item-action" style="background-color:#0995ab;color:white;">Settings</a>
        </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light" style="height:100px;">
            <button class="btn btn-info togglemenu mr-2" id="menu-toggle">Toggle Menu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item d-none d-lg-block">
                    <a href="index.php" style="color:white;" class="btn btn-danger mx-2">Logout</a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a href="index.php" style="color:white;" class="btn btn-success ml-2">Home</a>
                </li>
                <li class="nav-item d-lg-none ml-3 mb-1">
                    <a href="index.php" style="color:white;" class="btn btn-danger">Logout</a>
                </li>
                <li class="nav-item d-lg-none ml-3 mt-1">
                    <a href="index.php" style="color:white;" class="btn btn-success">Home</a>
                </li>
            </ul>
            </div>
        </nav>

        <div class="container-fluid text-center">
        </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
    </script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>