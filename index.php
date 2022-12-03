<?php
    include_once("config.php");
    include_once("navbar.php");

    if(!isset($_SESSION['user_login'])){
        header("Location: login.php");
    }
    $log = $_SESSION['user_login'];
    $fetch = mysqli_query($con,"select * from users where email = '$log'");
    $row = mysqli_fetch_array($fetch); 
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div>
                <img src="image/<?=$row['img'];?>" width="100px" height="80px">
            </div>
            <table class="table table-bordered table-hover">
        
                <tr>
                    <th>Id</th>
                    <td><?=$row['id'];?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?=$row['name'];?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?=$row['email'];?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?=$row['address'];?></td>
                </tr>
                <tr>
                    <th>Password</th><br><br>
                    <td><?=$row['password'];?></td><br><br>
                </tr>
                <tr>
                    <th>Action</th>
                    <td class="btn-group">
                        <a href="user_delete.php?del=<?=$row['id'];?>" class="btn btn-danger btn-lg">X</a>
                        <a href="user_edit.php?edit=<?=$row['id'];?>" class="btn btn-primary btn-lg">Edit</a>
                    </td>
                </tr>  
            </table>  
        </div>
    </div>
</div>