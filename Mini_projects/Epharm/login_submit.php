<?php
    $db_hostname="127.0.0.1";
    $db_user="root";
    $db_password="";
    $db_name="epharm";

    $conn=mysqli_connect($db_hostname,$db_user,$db_password,$db_name);
    if(!$conn)
    {
        echo "connection failed : ".mysqli_connect_error();
        exit;
    }

    $email= $_POST['email'];
    $password= $_POST['password'];

    $sql="SELECT * FROM customers where email='$email' and password='$password'";

    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error : ".mysqli_error($conn);
    }

    $row=mysqli_fetch_assoc($result);
    if($row)
    {
        echo"Hello ".$row['name']."!";
    }
    else
    {
        echo"invalid login";
    }
    mysqli_close($conn);
   
 ?>