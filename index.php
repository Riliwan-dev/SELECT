<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        
    </form>
    <h1>User Info</h1>
    <table border="2" style="text-align:center; color:red;">
        <tr>
            <th>S/N</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan='2'>Action</th> 
        </tr>

        <?php 
        $Select = "SELECT * FROM grace";
        $Query = mysqli_query($conn,$Select);
        $sn = 1;
        while($rows = mysqli_fetch_assoc($Query)){
        ?>

        <tr>
            <td><?php echo $sn++;//$rows['id'];?></td>
            <td><?php echo $rows['firstname'];?></td>
            <td><?php echo $rows['lastname'];?></td>
            <td><?php echo $rows['email'];?></td>
            <td><?php echo $rows['password'];?></td>
            <td> <a href="edit.php?id=<?php echo $rows['id'];?>"> edit </a></td>
            <td> <a href="delete.php?delete_id=<?php echo $rows['id'];?>">Delete</a></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>