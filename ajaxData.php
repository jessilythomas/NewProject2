<?php

include 'dbConfig.php';
session_start();
if(!empty($_POST["country_id"])){
   
    $query = $db->query("SELECT * FROM tbl_state WHERE country_id = ".$_POST['country_id']);
   
    $rowCount = $query->num_rows;
    
 
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}

elseif(!empty($_POST["state_id"])){
   
    $query = $db->query("SELECT * FROM tbl_city WHERE state_id = ".$_POST['state_id']);
  
    $rowCount = $query->num_rows;
    
    
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
           // $_SESSION["cityid"]=$row['city_id'];
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}


elseif(!empty($_POST["city_id"]))
{

    $_SESSION["city_id"]=$_POST["city_id"];
}


?>
