<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("voonik", $conn);
if($_REQUEST['enter']){
    $name = $_POST['name'];
    if(empty($name)){
        $make = '<h4>You must type a word to search!</h4>';   
    }else{
       $make = '<h4>no match found!</h4>';
        $sele=  "SELECT * FROM voonik_tbl WHERE name LIKE '%$name%'";
        $result = mysql_query($sele);
        
        if($mak = mysql_num_rows($result) > 0 ){
            while($row = mysql_fetch_assoc($result)){
                echo '<h4> Id
                <br> name
                </h4>';
            }
        }else{
            echo '<h2> search result </h2>';
            print ($make);
        }
        mysql_free_result($result);
        mysql_close($conn);
    }
}
?>