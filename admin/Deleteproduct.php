<?php
$conn=mysqli_connect('localhost','root','','voonik');
$sql="DELETE FROM voonik_tbl WHERE product_id='".$_GET['product_id']."'";
$res=mysqli_query($conn,$sql);
if($res)
{
    echo "<script> alert('deleted')</script>";
}
else
{
    echo "fail";
}
?>