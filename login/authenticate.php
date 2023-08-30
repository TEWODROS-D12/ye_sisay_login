<?php 


include"db_conn.php";
session_start();
 
  $uemail=$_POST['email'];
  $upassword=$_POST['password'];

  $sql="SELECT * FROM user WHERE email='$uemail' AND user_password='$upassword' ";
  $result=mysqli_query($conn,$sql);

   if (mysqli_num_rows($result)>0){
    $responce['error']="000";
    $responce['message']="login succes";
    $row=mysqli_fetch_assoc($result);
    echo json_encode($row);


    if ($row['email']==$uemail && $row['user_password']==$upassword){

      $_SESSION['user_name'] = $row['user_name'];
      $_SESSION['password'] = $row['user_password'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['id'] = $row['id'];

    header("Location:home.php");
    exit();}
    }
   else {

    header("Location:index.php?error=invalid password or username");
    exit(); 
  }


?>