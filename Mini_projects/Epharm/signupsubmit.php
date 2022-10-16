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
    if(isset($_POST['submit']))
    {
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $address= $_POST['address'];
    
    
     if($email=="")
     {
             echo "Enter all valid fields";
         exit;
     }
     $sql="INSERT INTO customers(email,password,name,gender,age,address) VALUES ('$email','$password','$name','$gender','$age','$address')";

     $result= mysqli_query($conn,$sql);
    if(!$result){
         echo "Error : ".mysqli_error($conn);
         exit;
     }
     else
     {
        header("Location: dashboard.html");
     }
     
}
     mysqli_close($conn);
   
    
 ?> 