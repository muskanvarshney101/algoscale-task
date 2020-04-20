<?php

session_start();
include('connection.php');

extract($_POST);
if(isset($_POST['submit'])){
    mysqli_select_db($conn,'admin') or die(mysqli_error());
    $email=$_POST['userId'];
    $pass=$_POST['password'];

    $query="SELECT * FROM user where email = '$email'AND password = '$pass' ";

    $result = mysqli_query($conn,$query);
    $num=mysqli_num_rows($result);

    if($num==1){

        // $_SESSION['email'] = $name;
        ?>
        <Script>
                alert('login successful');
                window.open('profile.php','_self');
                </script>
        <?php
        // header('location:profile.php');
    }

    else{
        ?>

<Script>
                alert('login unsuccessful. Please gtry again');
                window.open('login.php','_self');
                </script>
        <?php
    }

}
?>