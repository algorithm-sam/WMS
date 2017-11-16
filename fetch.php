<?php
    $conn= mysqli_connect('localhost','root','','slides') or die('could not connect to the database');

    $str_json=file_get_contents('php://input');
    $details=json_decode($str_json,true);
    
    if(isset($details['url'])){
        $query="SELECT slides from slides where id=1";
        $result=mysqli_query($conn,$query);
        if($result){
            echo json_encode(mysqli_fetch_assoc($result)['slides']);
        }else{
            echo "Could not connect to the database";
        }
        exit();
    }

?>