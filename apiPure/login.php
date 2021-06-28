<?php

include"conn.php";

$Phone = $_POST['Phone'];
$Password = $_POST['Password'];

$sql="select * from users where phone_number like'$Phone' and password like'$Password'";

$result= mysqli_query($conn,$sql);

//$row=mysqli_num_rows($result) ;

if(mysqli_num_rows($result) >0)
{
  $ch['success']=true;
}
else
{
   $ch['success']=false;
}

echo json_encode($ch);
mysqli_close($conn);

?>