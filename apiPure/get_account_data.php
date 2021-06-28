<?php
    include"conn.php";

   $Number = strip_tags(trim($_GET["number"]));
   $total_row="SELECT * FROM acounts WHERE account_number LIKE '$Number' " ;
    $result= mysqli_query($conn,$total_row);

    $Comment=array();


    while ($row =mysqli_fetch_array($result))
    {
        $Comment[]=$row;

    }

    echo "{account_info :".json_encode($Comment,JSON_UNESCAPED_UNICODE)."}" ;


?>