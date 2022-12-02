<?php
    include_once("config.php");
    include_once("navbar.php");
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header display-1">Signup Here</div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-2">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Address</label>
                            <textarea name="address" class="form-control"></textarea>
                        </div>
                        <div class="mb-2">
                            <input type="submit" value="Signup" name="send" class="form-control btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];

        $signup = mysqli_query($con,"insert into users(name,email,password,address)values('$name','$email','$password','$address')");

        if($signup){
            echo "signup ho gya";
        }
        else{
            echo "nhich hua";
        }

    }
?>