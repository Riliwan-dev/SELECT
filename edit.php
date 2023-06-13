 <?php
 include('config.php');
  
    $id = $_GET['id'];
  
  $Select = "SELECT * FROM grace WHERE id = $id";
  $result_select = mysqli_query($conn,$Select);
  
$row = mysqli_fetch_assoc($result_select);
  if(isset($_POST['submit'])){
    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $Email = $_POST['email'];
    $Pword = $_POST['pword'];

    
  $query = "UPDATE grace SET ";
  $query .= "firstname = '$Fname',";
  $query .= "lastname = '$Lname',";
  $query .= "email = '$Email',";
  $query .= "password = '$Pword'";
  $query .= "WHERE id = $id ";

  $result = mysqli_query($conn,$query);
  echo ($result)? 'Updated':'not Updated';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <label for="firstname">firstname</label>
    <input type="text" name="fname" value="<?php echo $row['firstname'];?>">

    <label for="lastname">lastname</label>
    <input type="text" name="lname" value="<?php echo $row['lastname'];?>">

    <label for="email">email</label>
    <input type="email" name="email" value="<?php echo $row['email'];?>">

    <label for="password">password</label>
    <input type="password" name="pword" value="<?php echo $row['password'];?>">

    <input type="submit" value="submit" name="submit">
  </form>  
</body>  
</html>
