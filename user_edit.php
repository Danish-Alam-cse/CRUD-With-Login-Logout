<?php
    include_once("config.php");
    include_once("navbar.php");
    if(isset($_GET['edit'])){
    $edit = $_GET['edit'];
    $query = mysqli_query($con,"select * from users where id ='$edit'");
    $row = mysqli_fetch_array($query);
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header display-1">Update Profile</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-2">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="<?=$row['name'];?>">
                        </div>
                        <div class="mb-2">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" value="<?=$row['email'];?>">
                        </div>
                        <div class="mb-2">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" value="<?=$row['password'];?>">
                        </div>
                        <div class="mb-2">
                            <label for="">Image</label>
                            <input type="file" name="img" class="form-control" value="<?=$row['img'];?>">
                        </div>
                        <div class="mb-2">
                            <label for="">Address</label>
                            <textarea name="address" class="form-control"><?=$row['address'];?></textarea>
                        </div>
                        <div class="mb-2">
                            <input type="submit" value="Update" name="resend" class="form-control btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    if(isset($_POST['resend'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
//Image Work
        $img = $_FILES['img'] ['name'];
        $tmp_img = $_FILES['img'] ['tmp_name'];
        move_uploaded_file($tmp_img,"image/$img");    


        $signup = mysqli_query($con,"UPDATE users SET name ='$name',email='$email',password = '$password',address='$address',img='$img' where id = '$edit' ");

        if($signup){
            header("Location: index.php");
        }
        else{
            echo "nhich hua";
        }

    }
?>
<?php }?>