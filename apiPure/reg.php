<?php
    include"conn.php";

    $Name = $_POST["Name"];
    $Phone_number = $_POST["Phone_number"];
    $Password = $_POST["Password"];

    if($Name<>null && $Phone_number<>null && $Password<>null){
        $total_row="SELECT * FROM users";
        $result= mysqli_query($conn,$total_row);
        $old= mysqli_num_rows($result);

    $insert="insert into users (name,phone_number,role,email,password) values ('$Name','$Phone_number','coustmar','','$Password')";
        $inser= mysqli_query($conn,$insert)or die("errror");
             $total_row_new="SELECT * FROM users";
                  $result_t= mysqli_query($conn,$total_row_new);
                      $new= mysqli_num_rows($result_t) ;

    if($new > $old){
        $check["success"]=true;
    }else {
        $check["success"]=false;
    }   
    }else {
        $check["success"]=false;
    }
    echo json_encode($check);
    mysqli_close($conn);

?>