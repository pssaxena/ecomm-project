<?php
$co=mysqli_connect("localhost","root","","voonik");
if($co)
{
    echo"connected";
}
else{
    echo"not";
}
@$e=$_POST['email'];
@$p=$_POST['password'];
$sql="INSERT INTO sign_tbl(Email, Password )values('$e','$p')";
$res=mysqli_query($co,$sql);
if($res)
{
    echo"successfully";
}
else
{
    echo"not successfully";
}
?>

<html>
<head>
     <title>online shopping</title>
         <link rel="stylesheet" type="text/css" href="navigat%20cod.php">
    <link rel="stylesheet" href="style.php">
     <link rel="stylesheet" type="text/css" href="mainpagecss.php">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.php">
        
 <style>
   .jkhl
     {
        border: 2px solid none;
         align-content: justify;
         background-color: none;
         font-family: inherit;
         font-size: 20px;
         margin-top: 20px;
     }
    </style>   
    </head>
    <body>
                <?php include("header.php"); ?>
    <form method="post">
        <pre><div class="jkhl">
                         <h1 style="text-align:center;">Sign in</h1>
                Email:         <br>
                <input type="email" name="email" placeholder="abc@email.com"><br>
                Password:      <br>
                <input type="password" name="password"><br>
                <input type="submit" value="Sign in" name="submit" style="border:5px solid black; background-color:black; color:white; font-size:20px">




















        </div></pre>
        </form>
            
          <?php include("footer.php"); ?>
          
    </body>
</html>