<?php
    echo"connect";
    $server="b1kaytr2obiddczyplec-mysql.services.clever-cloud.com:3306";
        $username="ufxlqlgn1qsecefc";
    $password= "POv1qVQeHhyM3Z0YdQZx";

    $con=mysqli_connect($server,$username,$password);   

    if(!$con)
    {
        
        die("connection ersss".mysqli_connect_error());
       
    }
    echo"connect";
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $des=$_POST['desc'];

        
        $sql="INSERT INTO `b1kaytr2obiddczyplec`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `des`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$des', current_timestamp()); ";
        // echo $sql;
        if($con->query($sql)==TRUE){

            echo"insert succesfully";
        }else{
            echo "Error: $con->error";
        }
        $con->close();
