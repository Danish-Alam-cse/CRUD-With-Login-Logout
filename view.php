<?php
    include_once("config.php");
    include_once("navbar.php");

    if(!isset($_SESSION['user_login'])){
        header("Location: login.php");
    }
    $dekh = $_GET['dekh'];
    $fetch = mysqli_query($con,"select * from users where id = '$dekh'");
    $row = mysqli_fetch_array($fetch); 
?>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card shadow-lg">
                    <img src="image/<?=$row['img'];?>" class="card-img-top" height="300px">
                <div class="card-body shadow">
                    <table class="table table-bordered">
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
                            <th>Password</th>
                            <td><?=$row['password'];?></td>
                        </tr>
                        <tr>
                            <th>Action</th>
                            <td class="">
                                <a href="#" onclick=alert('followed') class="btn btn-primary btn-lg">Follow</a>
                            </td>
                        </tr>  
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>