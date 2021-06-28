<?php
     include"conn.php";

  
   $total_row="SELECT * FROM categories ORDER BY id desc";
    $result= mysqli_query($conn,$total_row);

    $News=array();


    while ($row =mysqli_fetch_array($result))
    {
        $News[]=$row;
    }

    echo "{categories :".json_encode($News,JSON_UNESCAPED_UNICODE)."}" ;


?>