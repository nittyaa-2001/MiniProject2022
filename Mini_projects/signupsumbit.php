<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="epharm";

    $conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo "connection failed : ".mysqli_connect_error();
        exit;
    }
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $sql="INSERT INTO customers(email,password,name) VALUES ('$email','$password','$name')";

    $result= mysqli_query($conn,$sql);
    if(!$result){
        echo "Error : ".mysqli_error($conn);
        exit;
    }
    echo "registration successful!";
    mysqli_close($conn);
?>