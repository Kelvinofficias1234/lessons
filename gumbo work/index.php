<?php
    include('connection.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
   <style>
       h1{
           width: 100%;
           height: 89px;
           background-color:#777;
           text-align:center;
       }
       legend{
           width: 20;
           height: 67px;
           text-align:center;
           color:#666;
       }
   </style>
<body>
     <h1>Homework</h1>

    <form method="POST">
       
        <fieldset>
           <legend>Login page</legend>
            username: <input type="text" name="username" value="">
             <br>
             country <input type="text" name="country" value="">
            <br>
            password: <input type="password" name="password" value=""><br>
            <br>
            <input type="submit" name="login" value="login">



        </fieldset>
    </form>
    <?php

    if(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $country = $_POST['country'];

        $select = "SELECT * FROM users WHERE user_name = '$username' ";
        $query = mysqli_query($conn,$select);

        if(!mysqli_num_rows($query)){
            echo "incorect username or Password";
        }
    
        $result = mysqli_fetch_array($query);

        if($result['user_name'] == $user_name){
            echo "user_name";


        }

        if($result['password'] == $password){
          
            echo "password";
            
        }

        if($result['country'] == $country){

            echo "country";
        
 
             session_start();
             $_SESSION['user'] =  $username;
             $_SESSION['pass'] =  $password;
             $_SESSION['country'] =  $country;

          
    
        }else{
            echo "user doesnt exist";
        }

    }
    ?>
  
</body>
</html>