<?php
$con=new mysqli('localhost','root','','crudoperation');
/*if($con)
{
    echo "Connection successful";

}
else{
    die(mysqli_error($con));
}*/
if(!$con)
{
    die(mysqli_error($con)); 
}
?>