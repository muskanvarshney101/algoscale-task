<?php  
 session_start();  
 include 'connection.php';  
 $username = $_SESSION['email'];   
 ?>
<html>
    <head>
        <style>
        body{
            margin:0;
        padding:0;
        font-family:sans-serif;
        background:url('back.jpeg')no-repeat;
        background-size:cover;
            position: absolute;
            }
            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-size: 15px;
    font-family: sans-serif;
}

header{
    width: 100%;
    height: 100px;
    margin:0px;
    padding:0px;
    background: #4b4b4b;
    box-sizing: border-box;
    position: fixed;
    z-index: 99;
    
   
}
.logo{
    margin-left: 50px;
    width: 200px;
    float: left;
    margin-top: 20px;
    
  
 
}
            .container{
                margin-left: 60%;
               
                width: 60%;
                height: 200px;
                
            }
         
nav{
    float: right; 
    display: block;
        margin-top: 10px;
     margin-right: 10%;

}



nav ul li {
  float: left;
display: flex;
    
    list-style: none;
}

nav ul li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
    margin-top: 10px;
    
   
}

nav ul li a.active,
nav ul li a:hover{
    background: #069370;
    border-radius: 20px;
color: #fff;
transition: 0.9s;

}
            
            
    select {
        width: 300px;
        margin: 10px;
        height: 30px;
        border-radius: 100px;
        padding-left: 10px;
       
    }
    select:focus {
        
        width: auto;
        height: 10px;
        border-radius: 100px;
        
        
        
    }    
            .btn{
                margin-top: -10px;
                border-radius: 20px;
                height: 40px;
                width: 150px;
                /* background-color:  #90d6e6; */
                background:none;
                border:2px solid #4caf50;
                color:white;
                padding: 5px;
                font-size: 18px;
                cursor: pointer;
                margin:12px 0;
            }
            h1{
                color:white;
            }
           
            
      
            
            

        </style>
        
        
    </head>
    <body>
        
     <header >
        
            <div class="navbar">
                <a href="#" class="logo"><img src="algoo11.png" ></a>
            
         
            
               <nav>
              
                <ul>
                <li class="items">
                
                    <a href="logout.php" ><u>LogOut</u></a>
                     </li>
            </ul>
                
            </nav></div>
            
            
        <div class="container" align ="center" style="margin:20%">
            <form action="Delete.php" method="post">
 <h1 style="padding-top: 20px " >User Profile:</h1>
  <br>
  <select id="mySelect" name="email">
  <?php
  if(isset($_SESSION['email'])){  
    if(time()-$_SESSION['last_login']>15)  
    {  
      header('location:profile.php');  
    }  
    else  
    {  
      $_SESSION['last_login'] = time();  
    }  
  }  
  else  
  {  
    header('location:login.php');  
  }  
  $query="SELECT * FROM `user` ";
  $data=mysqli_query($conn,$query);
  while($array=mysqli_fetch_array($data))
  {
      ?>
      <option  value="<?php echo $array['email']; ?>" ><?php echo $array['email']?></option>
      <?php
  }
  ?>
   </select>  
   <br>
   <br>
   <button type="submit"  name="submit" class="btn">Delete</button>
</form>
<br>


       </div></header>

       
        </body>
</html>