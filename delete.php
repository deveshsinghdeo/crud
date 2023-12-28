<?php
include 'connect.php';
if(isset($_GET['deleteid'])) //using GET method we can access the variable data from the url
{
    $id=$_GET['deleteid'];

    $sql="delete from crud where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "Ddeleted successfully";
        header('location:display.php');
}
else{
die(mysqli_error($con));
}
}
?>