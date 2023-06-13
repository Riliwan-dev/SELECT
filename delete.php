<?php
include('config.php');
$delete_id = $_GET['delete_id'];

$DELETE = "DELETE FROM grace WHERE id = '$delete_id' ";
$Query = mysqli_query($conn,$DELETE);

if($Query){
    echo '<script>';
    echo ' alert("data Deleted successfully")'; 
    echo '</script>';
    echo "<script>window.location.href = 'index.php'</script>";
}
    else{
        echo '<script>';
        echo ' alert("data Not Deleted")'; 
        echo '</script>';   
}

?>