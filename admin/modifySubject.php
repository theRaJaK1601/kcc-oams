<?php

    session_start();
    if( !isset($_SESSION['usernameA'] ) )  
    {
        header('location:http://localhost/ams/main/index.php');
    }
    
    if(!empty($_POST['delete']))
    {
        foreach ($_POST['delete'] as $code) {
            
            $conn= mysqli_connect('localhost','uttam','uttam123');
            mysqli_select_db($conn,'KCC_db');
    
            $q1="delete from subject where Code='$code'";
    
            mysqli_query($conn,$q1);
        
            mysqli_close($conn);

        }
    }
    
    mysqli_query($conn,$q1);
        
    mysqli_close($conn);
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attendance Portal | KCC | Admin</title>
    <link rel="shortcut icon" type="image/jpg" href="../main/logo.jpg">
</head>
<body>
    <script>
        alert("Subject Record Updated Successfully!");
    </script>
    <?php echo"<script>window.location='http://localhost/ams/admin/showSubject.php'</script>" ?>
</body>
</html>