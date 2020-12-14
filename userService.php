  
<?php


require_once('db.php');

function userRegistration($id, $username, $password, $email, $type){
    
    $conn = getConnection();
    $query = "insert into user (id,username,password,email,type) values ('$id', '$username', '$password', '$email', '$type')";
    $status=mysqli_query($conn,$query);

    if($status)
    {
        return true;
    }
    else
    {
        return false;
    }
}
    
}

function validateUser($username, $password){
    
    $conn = getConnection();
    $query = "select * from user where username = '$username' and password = '$password'";
    $status=mysqli_query($conn,$query);

   if($status)
        {
            return true;
        }
        else
        {
            return false;
        }
    
}