<body>
<h2 align="center" style="font-size:36px;color:#006666"><u>UPDATE</u></h2><br>
<?php
$conn=mysqli_connect('localhost','root','','voonik');
//$aa=$_GET['Subid'];
$sql="SELECT * FROM voonik_tbl WHERE product_id='".$_GET['product_id']."'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{  
$aa=$row["product_id"];
$j=$row["cat"];    
$c=$row["product_name"];
$d=$row["price"];
$e=$row["description"];
$f=$row["image"];    
?>
<form method="post">
<table align="center">
    <tr><td><center><h2 align="center">cat:</td><td>
        <input type="text" name="bname" value="<?php echo $j; ?>" style="font-size:18px; height:30px"></h2></td></td>
    <tr><td><center><h2 align="center">product_name:</td><td>
        <input type="text" name="cname" value="<?php echo $c; ?>" style="font-size:18px; height:30px"></h2></td></td>
<tr><td><center><h2 align="center">price:</td><td>
    <input type="text" name="sname" value="<?php echo $d; ?>" style="font-size:18px; height:30px"></h2></td></td>
    <tr><td><center><h2 align="center">description:</td><td>
    <input type="text" name="pname" value="<?php echo $e; ?>" style="font-size:18px; height:30px"></h2></td></td>
 <tr><td><center><h2 align="center">image:</td><td>
    <input type="file" name="qname" value="<?php echo $f; ?>" style="font-size:18px; height:30px"></h2></td></td>   
</table>
<?php
}?>
<center>
<input type="submit" value="UPDATE" name="update" style="width:90px;height:35px; font-size:18px"></center>
</form>
<?php
if(isset($_POST['update']))
{
$j=$_POST['bname'];   
$c=$_POST['cname'];
$d=$_POST['sname'];
$e=$_POST['pname'];
$f=$_POST['qname'];   
$sql3="UPDATE voonik_tbl SET cat='$j', product_name='$c', price='$d', description='$e', image='$f' where product_id='".$_GET['product_id']."'";
$res3=mysqli_query($conn,$sql3);
 if($res3)
{
	echo "<script>alert('Data Submission Sucessfully');</script>";
}
else
{
echo "<script language='javascript'> alert('Data Submission Failed');</script>";
}
}

?>
</div>
</body>
</html>