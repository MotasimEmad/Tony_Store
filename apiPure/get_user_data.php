<?php
    include"conn.php";

   $UserEmail = strip_tags(trim($_GET["user_email"]));
   $total_row="SELECT * FROM users WHERE phone_number LIKE '$UserEmail' " ;
    $result= mysqli_query($conn,$total_row);

    $Comment=array();


    while ($row =mysqli_fetch_array($result))
    {
        $Comment[]=$row;

    }

    echo "{user_info :".json_encode($Comment,JSON_UNESCAPED_UNICODE)."}" ;


?>