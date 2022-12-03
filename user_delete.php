<?php
    include_once("config.php");
    include_once("navbar.php");
    if(isset($_GET['del'])){
        $del = $_GET['del'];
        $query = mysqli_query($con,"delete from users where id ='$del'");
        if($query){
            header("Location: signup.php");
        }
    }