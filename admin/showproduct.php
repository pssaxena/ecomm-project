<html>
<head></head>
<body>
    <table border="2px" width="100%">
    <tr>
        <td><b>Cat</b></td>
        <td><b>Product_name</b></td>
        <td><b>Price</b></td>
        <td><b>Description</b></td>
        <td><b>Image</b></td>
            <td><b>Update</b></td>
            <td><b>Delete</b></td>
        </tr>
    <?php
        $co=mysqli_connect("localhost","root","","voonik");
        session_start();
        @$a=$_GET['product_id'];
        $sql="select * from voonik_tbl";
        $res=mysqli_query($co,$sql);
        while($r=mysqli_fetch_array($res))
        {
            $_session['product_id']=$a;
            $a=$_session['product_id'];
            $c=$r['cat'];
            $n=$r['product_name'];
            $p=$r['price'];
            $d=$r['description'];
            $i=$r['image'];
            ?>
        <tr>
         <td><?php echo $c; ?></td>    
        <td><?php echo $n; ?></td>
        <td><?php echo $p; ?></td>
        <td><?php echo $d; ?></td>
        <td><img src='../proimg/<?php echo $i; ?>' height="100px" width="100px"></td>
           <td><a href="Updateproduct.php? product_id=<?php echo $r['product_id'] ?>">Update</a></td> 
            <td><a href="Deleteproduct.php? product_id=<?php echo $r['product_id'] ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
    </body>
</html>