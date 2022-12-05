<?php
    include_once("config.php");
    include_once("navbar.php");

    ?>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php
        $log = $_SESSION['user_login'];
        $query = mysqli_query($con,"select * from users where email != '$log' ");
        while($row=mysqli_fetch_array($query)){?>
        <tr>
            <td><?=$row['id'];?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['address'];?></td>
            <td><a href="view.php?dekh=<?=$row['id'];?>" class="btn btn-primary">View</a>
            </td>
        </tr>
        <?php } ?>
    </table>
