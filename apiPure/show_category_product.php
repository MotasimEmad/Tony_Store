<?php
     include"conn.php";

   $CategoryID = strip_tags(trim($_GET["category_id"]));
   $total_row="SELECT * FROM products WHERE category_id LIKE '$CategoryID' " ;
    $result= mysqli_query($conn,$total_row);

    $Comment=array();


    while ($row =mysqli_fetch_array($result))
    {
        $Comment[]=$row;

    }

    echo "{products :".json_encode($Comment,JSON_UNESCAPED_UNICODE)."}" ;


?>