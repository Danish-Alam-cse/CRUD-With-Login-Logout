<?php
    include_once("config.php");
    include_once("navbar.php");
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header display-1">Login Here</div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-2">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="submit" value="Login" name="give" class="form-control btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    if(isset($_POST['give'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = mysqli_query($con,"select * from users where email ='$email' AND password ='$password'");
        $count = mysqli_num_rows($login);

        if($count > 0){
            $_SESSION['user_login'] = $email;
            header("Location: index.php");
        }
       else{
            echo "<script>alert('Email or password is wrong!')</script>";
       }
    }
?>