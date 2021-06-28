<?php

include"conn.php";

$Number = $_POST['Number'];
$Password = $_POST['Password'];

$sql="select * from acounts where account_number like'$Number' and password like'$Password'";

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