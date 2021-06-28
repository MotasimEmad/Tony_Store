<?php
    include"conn.php";

    $All_Products = $_POST["All_Products"];
    
        $total_row="SELECT * FROM orders";
        $result= mysqli_query($conn,$total_row);
        $old= mysqli_num_rows($result);

    $type = "isssi";
    $param = array("All_Products");
    $sql ="insert into orders (product_id,name,amount,total) values (?,?,?,?,?)";
    $sql_stmt = mysqli_prepare($conn,$sql);
    call_user_func_array('mysqli_stmt_bind_param', array_merge(array($sql_stmt, $type), $param));
    mysqli_stmt_execute($sql_stmt);
    
        $inser= mysqli_query($conn,$sql)or die("errror");
             $total_row_new="SELECT * FROM orders";
                  $result_t= mysqli_query($conn,$total_row_new);
                      $new= mysqli_num_rows($result_t) ;

    if($new > $old){
        $check["success"]=true;
    }else {
        $check["success"]=false;
    }   
    
    echo json_encode($check);
    mysqli_close($conn);

?>