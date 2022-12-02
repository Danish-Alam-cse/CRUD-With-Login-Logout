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
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <td><?=$row['id'];?></td>
                    <th>Name</th>
                    <td><?=$row['name'];?></td>
                    <th>Email</th>
                    <td><?=$row['email'];?></td>
                    <th>Address</th>
                    <td><?=$row['address'];?></td>
                    <th>Password</th>
                    <td><?=$row['password'];?></td>
                    <td class="btn-group">
                        <a href="" class="btn btn-danger">X</a>
                        <a href="" class="btn btn-primary">Edit</a>
                    </td>
                </tr>

                      
            </table>
        </div>
    </div>
</div>