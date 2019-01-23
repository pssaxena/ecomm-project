<?php 
$conn=mysqli_connect("localhost","root","","voonik");
if(! $conn){
    echo"connection failed";
}
if(isset($_POST['search'])){
$name = $_POST['search'];
$sql="SELECT Name from voonik_tbl where Name like '%$name%' limit 5";
$Excu=mysqli_query($conn, $sql);
echo'<ul>';
while($result=mysqli_fetch_array($Excu)){
?>
<li onclick="fill('<?php echo $result['Name']; ?>')">
<input type="submit" name="submit" value="<?php echo $result['Name']; ?>"> 
</li>
<?php 
}}
?>
</ul>
 