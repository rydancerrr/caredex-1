<?php
include('connectDB.php');

$p_id=$_POST['p_id'];

$sql="delete from account where userID='$p_id'";
  

if (mysqli_query($con, $sql)) {
      echo "Data deleted successfully";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
?>
