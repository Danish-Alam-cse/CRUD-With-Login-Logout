<?php
    include_once("config.php");

   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <!-- Navbar Code Starts -->
<?php
     
     ?>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">Friend's Book(FB).com</a>
        <ul class="navbar-nav">
            <?php if(isset($_SESSION['user_login'])):
                $log = $_SESSION['user_login'];
                $fetch = mysqli_query($con,"select * from users where email = '$log'");
                $row = mysqli_fetch_array($fetch);
                ?>
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link">Hi,<?=$row['name'];?></a></li>
            <li class="nav-item"><a href="user_list.php" class="nav-link">User List</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>

            <?php else:?>
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="signup.php" class="nav-link">Signup</a></li>
            <?php endif; ?>



        </ul>
    </div>
</nav>
<!-- Navbar Code Ends -->


</body>
</html>