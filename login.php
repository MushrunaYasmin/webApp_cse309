<?php 
session_start();
if(isset($_SESSION['auth'])){
    if($_SESSION['auth'] ==1){      
        header("location:dashboard.php");
    }
}else{
    if(isset($_COOKIE['auther'])){
        if($_COOKIE['auther']==true){
            header("location:dashboard.php");
        }
    }
}

// db connect
include "library/connection.php";

$checkInfo=null;
if(isset($_POST['logbtn'])){
    $email= $_POST['lemail'];
    $pass=md5($_POST['lpass']);
    $keeplogin=isset($_POST['keeplogin'])?1:0;
    $login_query="SELECT * FROM admintbl WHERE email='$email' AND pass='$pass'";
    $resultLogin=$conn -> query($login_query);

    if($resultLogin -> num_rows >0 ){
        while($result=$resultLogin -> fetch_assoc()){
            $username=$result['username'];
        }
        $_SESSION['username'] =$username;
        $_SESSION['auth']=1;
        if($keeplogin==1){
            setcookie('auther', true, time()+(60*60*24*15), '/');
        }
        header("location:dashboard.php");
    }else{
        $checkInfo="invalid email or password!";
    }
   

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/custom.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/dashio.css" rel="stylesheet">

</head>

<body class="cbg">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"
                                style="background-image: url(img/emsbg2.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
                            </div>
                            <div class="col-lg-6 lpage">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hi Mushruna!!</h1>
                                    </div>
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="user">
                                        <div class="form-group">
                                            <input type="email" name="lemail" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="lpass" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="keeplogin" class="custom-control-input"
                                                    id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Keep me logged in</label>
                                            </div>
                                        </div>
                                        <button type="submit" name="logbtn" class="btn btncustom btn-user btn-block">
                                            Login
                                        </button>
                                        
                                    </form>
                                    <?php 
                                    if($checkInfo==null){
                                        echo "<div class='alert alert-info alert-dismissible fade show mt-3' role='alert'>
                                    Enter email and password to login.
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                      <span aria-hidden='true'>&times;</span>
                                    </button>
                                  </div>";
                                    }else{
                                    echo "<div class='alert alert-warning alert-dismissible fade show mt-3' role='alert'>
                                    $checkInfo
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                      <span aria-hidden='true'>&times;</span>
                                    </button>
                                  </div>";
                                    }
                                    ?>
                                    
                                    <div class="text-center">
                                        <a class="small" href="index.php" style="color:red;border:1px solid blue; padding:5px; background-color:white;">Home Page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/dashio.min.js"></script>

</body>

</html>