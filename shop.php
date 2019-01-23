<html>
    <head>
    <title>online shopping</title>
         <link rel="stylesheet" type="text/css" href="navigat%20cod.php">
    <link rel="stylesheet" href="style.php">
         <link rel="stylesheet" type="text/css" href="mainpagecss.php">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.php">
    </head>

    <body>
       <?php include("header.php"); ?>
      
         <?php
        $co=mysqli_connect("localhost","root","","voonik");
        $sql="select * from voonik_tbl WHERE cat='men'";
        $res=mysqli_query($co,$sql);
        while($r=mysqli_fetch_array($res))
        {
            $c=$r['cat'];
            $n=$r['product_name'];
            $p=$r['price'];
            $d=$r['description'];
            $i=$r['image'];
            ?>
        <div class="imgset">
        <img src='proimg/<?php echo $i; ?>' height="250px" width="300px"><br>
         <?php echo $c; ?>    
        <?php echo $n; ?><br>
        <?php echo $p; ?>
        <?php echo $d; ?>
        </div>
        
        <?php } ?>  
        
        
        
        <?php include("footer.php"); ?>

</body>
</html>