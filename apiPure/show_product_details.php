<?php
     include"conn.php";

   $ProductID = strip_tags(trim($_GET["product_id"]));
   $total_row="SELECT * FROM products WHERE id LIKE '$ProductID' " ;
    $result= mysqli_query($conn,$total_row);

    $Comment=array();


    while ($row =mysqli_fetch_array($result))
    {
        $Comment[]=$row;

    }

    echo "{product_details :".json_encode($Comment,JSON_UNESCAPED_UNICODE)."}" ;


?>