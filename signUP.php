<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        *{
        margin:0;
        padding:0;
        }
    body{
        margin:0;
        padding:0;
        font-family:sans-serif;
        background:url('back.jpeg')no-repeat;
        background-size:cover;
        /* position: absolute; */
    
    }
    .login-box{
        width:280px;
        position:absolute;
        top:45%;
        left:45%;
        transform:translate(-50%,-50%);
        color:white;
    }
    .login-box h1{
        float:left;
        font-size:30px;
        border-bottom:6px solid  #4caf50;
        margin-bottom:30px;
        padding:13px 0;

    }
    .text-box{
        width:100%;
        overflow:hidden;
        font-size:20px;
        padding:8px 0;
        margin:8px 0;
        border-bottom:1px solid

    }
    .text-box input{
        border:none;
        outline:none;
        background:none;
        color:white;
        font-size: 18px;
        width: 80%;
        float: left;
        margin:0 10px;
    }
    .btn{
        width:300px;
        background:none;
        border:2px solid #4caf50;
        color:white;
        padding: 5px;
        font-size: 18px;
        cursor: pointer;
        margin:12px 0;
    }
    .logo{
    margin-left: 0px;
    background:none;
    width: 300px;
    float: left;
    padding:10px;
    margin-top: 20px;
    position: absolute;
  
 
}
.items{
    color:white;
    font-size:13px;
    text-align: center;
    margin-left:50px;
    
}
    </style>
    <!-- <link rel="stylesheet" href="login.css"> -->
</head>
<body>
    <img src="algoo11.png" class="logo" >
<div class="login-box">
<h1>Sign In</h1>

<form action="insert1.php" method="post">
<div class="text-box">
<input type="text" name="NAme" placeholder="Enter Name" required>
</div>
<div class="text-box">
<input type="email" name="email" placeholder="Email Id" required>
</div>

<div class="text-box">
<input type="password" name="t3" placeholder="Password" required>
</div>

<input class="btn" type="submit" name="submit" value="Sign In" >
<br>
<a href="login.php" class="items">Already have an account? login </a>

</form>

</div>
    
</body>
</html>