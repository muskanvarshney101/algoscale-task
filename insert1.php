<?php


session_start();
include('connection.php');

extract($_POST);
    if(isset($_POST['submit'])){
        mysqli_select_db($conn,'admin') or die(mysqli_error());
        $name= trim($_POST['Name']);
        $email= ($_POST['email']);
        $password= trim($_POST['t3']);
        $Password =strlen($password);

        $query_email = "SELECT email from user WHERE email = '$email'";

        $result = mysqli_query($conn,$query_email);
        
        $num = mysqli_num_rows($result);

        if($num >0){
            
            ?>
            <Script>
                alert('Email Already exist');
                window.open('signUP.php','_self');
                </script>
                <?php

        }
        else{

        if($Password>6){
            $query = "INSERT INTO `user`(`name`,`email`,`password`) VALUEs('$name','$email','$password')";
            $data=mysqli_query($conn,$query);
            if($data){
                ?>
                <Script>
                alert('Data Inserted successfully');
                window.open('login.php','_self');
                </script>
                <?php
            }
            else{
                ?>
                <Script>
                alert('Data not Inserted ');
                window.open('signUp.php','_self');
                </script>
                <?php
            }
        }
        else{
            ?>
            <Script>
                alert('Password must be greater than 6 character');
                window.open('login.php','_self');
                </script>
                <?php
        }
    }
}

    ?>