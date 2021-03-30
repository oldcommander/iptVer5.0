<?php      
    include('baglan.php');  
    $username2 = $_POST['username'];  
    $password2 = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username2 = stripcslashes($username2);  
        $password2 = stripcslashes($password2);  
        $username2 = mysqli_real_escape_string($con, $username2);  
        $password2 = mysqli_real_escape_string($con, $password2);  
      
        $sql = "select * from uyeislemleri where email = '$username2' and parola = '$password2'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1 && ($username2 !="" && $password2 !="")){  
            echo header ("Location:http://ahmetcekin.cf/VERI/goruntusıkıştırma.html");  
        }  
        else{  
            echo header ("Location:http://ahmetcekin.cf/VERI/tekrardene.html"); 
        }     
?> 