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
 if (isset($_POST['submit']))
{
    @$j=$_POST['aname'];
    @$c=$_POST['bname'];
    $n=$_POST['cname'];
     $p=$_POST['dname'];
     $d=$_POST['ename'];
     $i=$_POST['fname']; 
    $g=$_POST['gname'];
     
    
 $sql="INSERT INTO
 order_tbl(product_name,price,quantity,size,name,address,contact_no)values('$j','$c','$n','$p','$d','$i','$g')";   
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
    .ad
        {
            float: left;
            height: 400px;
            margin:20px;
            border: 2px solid none;
        }
        
        .bd
        {
            float: left;
            height: 700px;
            width: 700px;
            margin-left: 20px;
            font-family:cursive;
            border: 2px solid none;
        }
        
        input
        {
            width: 300px;
            height: 30px;
        }
    
    
    
    
    </style>
    </head>
<body>
    
                   <?php	

		@$sqlm ="SELECT * FROM voonik_tbl where product_id='".$_GET['product_id']."'";
	   $resultm=mysqli_query($co,$sqlm);
	$r=mysqli_fetch_array($resultm);
	
	
	$l=$r['product_name'];
	$e=$r['price'];
    $t=$r['image'];
	
                ?>
    <?php include("header.php");?>
    <pre><div>
        <h2 style="text-align:center; font-size:36px; color:grey;"><u>ORDER DETAIL</u></h2> 
        <div class="ad">
        <img src='proimg/<?php echo $t ?>' width="300px" height="250px"><br>
        </div> <div class="bd">
    <form method="post">
        product_name:   <input type="text" name="aname" value='<?php echo $l ?>'><br>
        price:                 <input type="text" name="bname" value='<?php echo $e ?>'><br>
        quantity:            <input type="number" name="cname"><br>
        size:                   <select name="dname">
        <option>small</option>
        <option>medium</option>
        <option>large</option>
        <option>extra large</option>
        </select><br>
        name:                 <input type="text" name="ename"><br>
        address:             <input type="text" name="fname"><br>
        contact_no:        <input type="text" name="gname"><br>
                      <input type="submit" value="submit" name="submit">
    </form>
        </div>
    </div></pre>
    <?php include("footer.php");?>
    </body>
</html>