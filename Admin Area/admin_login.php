<?php
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login</title>
        
        <!-- Bootstrap css link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- Font Awesome link-->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjry1PvoDwiPUiKdWk5t3Pyo1Y1cOd4DSE0Ga+ri4AuTr">
        
        <style>
            body{
                overflow: hidden;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid m-3">
            <h3 class="text-center mb-5">Admin Login</h3>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-xl-5">
                    <img src="../images/" alt="admin Login" class="img-fluid">
                </div>
                
                <div class="col-lg-6 col-xl-5">
                    <form action="" method="post">
                        <div class="form-outline mb-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" placeholder="Enter Your Username" required="required" class="form-control">
                        </div>
                         <div class="form-outline mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter Your Password" required="required" class="form-control">
                        </div>
                        <div>
                            <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_login" value="Login">
                            <p class="small fw-bold mt-2 pt-3">Don't you have an account?<a href="admin_registration.php" class="link-danger">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
if(isset($_POST['admin_login'])){
    $user_username=$_POST['username'];
    $user_password=$_POST['password'];
    
    $select_query="SELECT * FROM `admin_table` WHERE admin_name='$user_username'";
    $resultt=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($resultt);
    $row_data=mysqli_fetch_assoc($resultt);
//    $user_ip=getIPAddress();
    
    if($row_count>0){
        //verifying password
        $_SESSION['admin_name']=$user_username;
        if(password_verify($user_password,$row_data['admin_password'])){
            $_SESSION['admin_name']=$user_username;
            echo "<script>alert('Logged in Successfully')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }else{
            echo "<script>alert('Invalid Credentials')</script>";
        }
    }
}
?>