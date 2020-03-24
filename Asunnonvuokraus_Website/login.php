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

        if(isset($_GET['login'])) {
            $loginusername = $_POST['loginusername'];
            $loginpassword = $_POST['loginpassword'];

            $statement = $conn->prepare("SELECT * FROM asunnon WHERE username = :loginusername");
            $result = $statement->execute(array('loginusername' => $loginusername));
            $user = $statement->fetch();

            //checking password
            if ($user !== false && password_verify($loginpassword, $user['pswd'])) {
                $_SESSION['userid'] = $user['userid'];
                die('Login successful. <a href="profile.php">Go to your profile.</a>');
            } else {
                $errorMessage = "Username or Password is wrong<br>";
            }
        }
    ?>

  <body>
    <nav class="navbar navbar-expand-lg">
        <a href="index.php" class="navbar-nav"><img src="logo2.png" alt="logo"></a>
        <ul class="navbar-nav ml-auto mr-5">
            <li class="my-2 my-sm-2 mx-2 d-none d-lg-block">
                <a href="login.php" style="color:white;" class="btn btn-info" type="submit">Login</a>
            </li>
            <li class="my-2 mt-sm-2 ml-2 d-none d-lg-block">
                <a href="register.php" style="color:white;" class="btn btn-info" type="submit">Register</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto mr-2 d-lg-none">
            <li class="my-2 my-sm-2">
                <a href="login.php" style="color:white;" class="btn btn-info" type="submit">Login</a>
            </li>
            <li class="my-2 my-sm-2">
                <a href="register.php" style="color:white;" class="btn btn-info" type="submit">Register</a>
            </li>
        </ul>
    </nav>

    <?php
    if(isset($errorMessage)) {
        echo $errorMessage;
    }
    ?>

    <div class="containerform">
        <div class="text-center mt-5" id="body">
            <form class="loginregister" action="?login=1" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="loginusername" id="exampleInputUsername1" aria-describedby="emailHelp" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="loginpassword" id="exampleInputPassword1" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>

    <footer class="navbar navbar-expand-lg">
        <img src="arrow.png" alt="arrow" class="navbar-nav ml-4 mr-auto d-none d-lg-block">
        <img src="arrow.png" alt="arrow" class="navbar-nav ml-4 mr-auto d-lg-none">
        <ul class="navbar-nav">
            <li class="my-2 my-sm-2 mr-4 d-none d-lg-block">
                <span><a href="#">Single Apartments</a></span>
            </li>
            <li class="my-2 mt-sm-2 ml-4 d-none d-lg-block">
                <span><a href="#">Shared Apartments</a></span>
            </li>
            <li class="my-2 ml-4 d-lg-none">
                <span><a href="#">Single Apartments</a></span>
            </li>
            <li class="my-2 ml-4 d-lg-none">
                <span><a href="#">Shared Apartments</a></span>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto mr-5">
            <li class="my-2 my-sm-2 mr-4 d-none d-lg-block">
                <span><a href="#">Cities</a></span>
            </li>
            <li class="my-2 mt-sm-2 ml-4 d-none d-lg-block">
                <span><a href="#">Categories</a></span>
            </li>
            <li class="my-2 ml-4 d-lg-none">
                <span><a href="#">Cities</a></span>
            </li>
            <li class="my-2 ml-4 d-lg-none">
                <span><a href="#">Categories</a></span>
            </li>
        </ul>
        <img src="arrow.png" alt="arrow" class="navbar-nav ml-auto mr-4 d-none d-lg-block">
        <img src="arrow.png" alt="arrow" class="navbar-nav ml-auto mr-4 d-lg-none">
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>