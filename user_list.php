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
        $query = mysqli_query($con,"select * from users");
        while($row=mysqli_fetch_array($query)){?>
        <tr>
            <td><?=$row['id'];?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['address'];?></td>
            <td><a href="" class="btn btn-danger">X</a>
            <a href="" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        <?php } ?>
    </table>
