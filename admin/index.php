

<?php

$conn=mysqli_connect('localhost','root','','voonik');


if(isset($_POST['submit'])){
    
   $uname=$_POST['username'];
    @$password=$_POST['password'];
    $sql="SELECT * FROM log_in WHERE username='$uname' AND password='$password'";
    $res=mysqli_query($conn,$sql);
    @$z=mysqli_num_rows($res);
    if($z==1)
    {
        header('location:home.php');
    }
    else{
        echo "<script> alert('out)</script>";
    }
}
?>
<html>
<head>
  <style>
    
      .ank{
          background-color: white;     
      } 
    
      .kit{
          margin-left: 40%;
          margin-top: 5%;
      }
    
      .h{
         margin-left: 44%;
          border-radius: 7px;
          height: 40px;
          width: 150px;
          font-size: 20px;
      }
    
      .a{
          width: 300px;
          height: 40px;   
      }
    
      .sha
      {
          text-align: center;
          font-family:inherit;
          border: 2px solid none;
          background-color:darkgray;
          margin-left: 350px;
          margin-right: 350px;
          margin-top: 20px;
          margin-bottom: 20px;
      }
    
      .b
      {
         text-align: center;
          font-family:inherit;
          font-size: 25px;
          border: 2px solid none;
          background-color:darkgray;
          margin-left: 350px;
          margin-right: 350px;
          margin-top: 20px;
          margin-bottom: 20px; 
      }
      
    </style>  </head>
     <body>
    <div class="ank">
         <img src="../proimg/admin.jpg" class="kit">
         <form method="post">
        <div class="sha">
            <h1>Admin Login</h1>
            </div>
        <div align="center">
         <input type="text" name="username" placeholder="Enter Your User Name" class="a"><br><br> 
             </div>
        <div align="center">
         <input type="password" name="password" placeholder="Enter Your Password" class="a"><br><br> 
             </div>
        <div>
           <input type="submit" name="submit" value="LOGIN" class="b">
             </div>
        </form>
         </div>
    </body>
</html>