<?php
$co=mysqli_connect("localhost","root","","voonik");
if($co)
{
    echo "connected";
}
else
{
    echo "not";
}
if(isset($_POST['submit']))
{
    $c=$_POST['cat'];
    $n=$_POST['n'];
     $p=$_POST['price'];
     $d=$_POST['description'];
     $i=$_POST['image']; 
 $sql="INSERT INTO
 voonik_tbl(cat,product_name,price,description,image)values('$c','$n','$p','$d','$i')";   
 $res=mysqli_query($co,$sql);
    if($res)
    {
        echo"successfully";
    }
    else
    {
        echo"not successfully";
    }
} 
?>

<html>
<head>
       <style>
          .bor

           {
                border: 2px solid none;
                text-align:justify;
                margin-left: 0;
                padding-left: 200;
                font-family:inherit;
                font-size: 20px;
                margin-top: 20px;
                color: #006666;
                background-color:none;
                padding-top: 0px;
            }
     </style>
</head>
<body>
<pre><center><div class="bor">
<h2 style="padding-left:300px; font-size:36px;"><u>ADD PRODUCT</u></h2>   
<form method="post">
<b>Categories</b>:<select name="cat">
<option>men</option>
<option>women</option>
<option>kids</option>
<option>cart</option>
</select><br>
<b>Product_name</b>: <br>
<input type="text" name="n" style="width:800px; height:30px;"><br>
<b>Price</b>: <br>   
<input type="text" name="price" style="width:800px; height:30px;"><br>
<b>Description</b>: <br> 
<input type="text" name="description" style="width:800px; height:30px;"><br>
<b>Image</b>: <input type="file" name="image"><br>
<input type="submit" value="INSERT" name="submit" style="width:90px; height:35px;">
</form>
</div></center></pre>
    </body>
</html>