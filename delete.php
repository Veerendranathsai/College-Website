<?php
include('Server.php');
if(isset($_GET['delete']))
$id=$_GET['delete'];

$sql = "SELECT profilephoto FROM users WHERE id = $id";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result);
$imagepath = $row['profilephoto'];
unlink($imagepath);

$query = "DELETE FROM users WHERE id='$id'"; 
$result = mysqli_query($db,$query);
if($result)
{
    echo "Deleted Successfully";
}
else
{
   echo "Not Deleted Successfully";
} 
header('location: profile.php');
?>