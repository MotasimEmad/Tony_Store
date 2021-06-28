<?php
     include"conn.php";

    $Number = strip_tags(trim($_GET["phone_number"]));

   $total_row="SELECT products.name as product_name, products.image as product_image, orders.total as product_amount,
   orders.state as order_state, products.price as product_price, orders.created_at as order_date FROM orders 
        INNER JOIN products ON orders.product_id = products.id 
            INNER JOIN users ON orders.User_id = users.id 
            WHERE users.phone_number LIKE '$Number'" ;
    $result= mysqli_query($conn,$total_row);

    $Comment=array();


    while ($row =mysqli_fetch_array($result))
    {
        $Comment[]=$row;

    }

    echo "{products :".json_encode($Comment,JSON_UNESCAPED_UNICODE)."}" ;


?>