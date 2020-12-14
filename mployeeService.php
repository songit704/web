@ -43,7 +43,6 @@ function employeeInfo($user)

        $row=mysqli_fetch_assoc($result);

        //setcookie('type',$row['type'],time()+300,'/');

        if(count($row)>0)
        {
@@ -90,4 +89,4 @@ function updateEmployeeInfo($user)
    }


?>  
?> 