<html>
<head>
    
  <title>shopping</title>  
      <link rel="stylesheet" type="text/css" href="navigat%20cod.php">
     <link rel="stylesheet" href="style.php">
     <link rel="stylesheet" type="text/css" href="mainpagecss.php">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.php">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.php">
    </head>
    
        <body>
       <?php include("header.php"); ?>
       <div style="margin-top:10px;">
       <img src="proimg/135.jpg" width="100%" height="400px">
       </div>
            
    <?php
        session_start();
        $co=mysqli_connect("localhost","root","","voonik");
        
        
        @$itemno=$_GET['product_id'];
        $sql="select * from voonik_tbl WHERE cat='women'";
        $res=mysqli_query($co,$sql);
        while($r=mysqli_fetch_array($res))
        {
            $_session['product_id']=$itemno;
            $itemno=$_session['product_id'];
            $c=$r['cat'];
            $n=$r['product_name'];
            $p=$r['price'];
            $d=$r['description'];
            $i=$r['image'];
            ?>
        <div class="imgset" style="margin-top:10px;">
        <img src='proimg/<?php echo $i; ?>' height="250px" width="300px"><br>
         <div class="text">
        product_name=<?php echo $n; ?><br>
        price=<?php echo $p; ?>
        description=<?php echo $d; ?>
        <div>
        <div>
             <a href="#? product_id=<?php echo $r['product_id'] ?>">
                 <input type="submit" value="Add to cart"></a></div>
            </div>
             <div>
             <a href="order.php? product_id=<?php echo $r['product_id'] ?>">
                 <input type="submit" value="order now"></a></div>
            </div>
        </div>
        
        <?php } ?>  
            
              <?php include("footer.php"); ?>
            
                </body>
</html>