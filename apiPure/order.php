<?php
    include"conn.php";

    $ProductID = $_POST["ProductID"];
    $ProductAmount = $_POST["ProductAmount"];
    $ProductTotal = $_POST["ProductTotal"];
    $UserID = $_POST["UserID"];
    $Location = $_POST["Location"];

    if($ProductID<>null && $ProductAmount<>null && $ProductTotal<>null && $UserID<>null && $Location<>null){
        $total_row="SELECT * FROM orders";
        $result= mysqli_query($conn,$total_row);
        $old= mysqli_num_rows($result);

    $insert="insert into orders (product_id,User_id,addres,payment_method,state,total) values ('$ProductID','$UserID','$Location','E-payment','new','$ProductAmount')";
        $inser= mysqli_query($conn,$insert)or die("errror");
             $total_row_new="SELECT * FROM orders";
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