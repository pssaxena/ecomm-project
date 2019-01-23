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
    $c=$_POST['na'];
    $n=$_POST['email'];
     $p=$_POST['city'];
     $d=$_POST['phone'];
     $i=$_POST['message']; 
 $sql="INSERT INTO
 contact_tbl(name,email,city,phone,message)values('$c','$n','$p','$d','$i')";   
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
    <title>online shopping</title>
         <link rel="stylesheet" type="text/css" href="navigat%20cod.php">
    <link rel="stylesheet" href="style.php">
         <link rel="stylesheet" type="text/css" href="mainpagecss.php">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.php">
        <style>
        .border
            {
                border: 2px solid none;
                text-align:justify;
                margin-left: 0;
                padding-left: 200;
                font-family:inherit;
                font-size: 20px;
                margin-top: 20px;
                color: black;
                background-color:none;
                padding-top: 0px;
            }
        .address
            {
                border:2px solid none;
                font-family: inherit;
                font-size: 20px;
                margin-top: 20px;
            }
        
        
        
        </style>
    </head>

    <body>
       <?php include("header.php"); ?>
       <pre><div class="border">
                     <h2 style="padding-left:150">CONTACT US</h2>
       
       <form method="post">
   
        Name:        <br>
        <input type="text" name="na"><br>
        Email:       <br>
        <input type="email" name="email"><br> 
        City:        <br>
        <select name="city" style="margin-right:85px;">
                     <option>select</option>
                     <option>jaipur</option>
                     <option>ajmer</option>
                     <option>kota</option>
                     </select><br>
        Phone:       <br>
        <input type="text" name="phone"><br>
        Message:     <br>
        <textarea row="10" col="20" placeholder="Type Your Message Here" name="message"></textarea><br>
        <input type="submit" value="Submit" name="submit" style="border:2px solid black; padding:10; background-color:black; color:white; font-size:20px;">
    </form>
     
        </div></pre>
        <pre><div class="address">
        <h2 style="text-align:center;">Contact Information</h2>
          <p>
          ABC limited
          Street no. 1234, Locality:kdgkdjghjk,
          City:dsgfguy,
          State:hkhgkjgh,
          Country:india,
          Email-id:abc1234@email.com,
          Phone No.: 9745682153, 8954769541.
          </p>  
        
        </div></pre>
        <?php include("footer.php"); ?>

</body>
</html>