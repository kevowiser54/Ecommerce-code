<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Registration</title>
        
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
            <h3 class="text-center mb-5">Admin Registration</h3>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-xl-5">
                    <img src="../images/" alt="admin registration" class="img-fluid">
                </div>
                
                <div class="col-lg-6 col-xl-5">
                    <form action="" method="post">
                        <div class="form-outline mb-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" placeholder="Enter Your Username" required="required" class="form-control">
                        </div>
                         <div class="form-outline mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter Your email" required="required" class="form-control">
                        </div>
                         <div class="form-outline mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter Your Password" required="required" class="form-control">
                        </div>
                         <div class="form-outline mb-4">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required="required" class="form-control">
                        </div>
                        <div>
                            <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_register" value="Register">
                            <p class="small fw-bold mt-2 pt-3">Already have an account?<a href="admin_login.php" class="link-danger">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
if(isset($_POST['admin_register'])){
 $user_username=$_POST['username'];   
     $user_email=$_POST['email'];
     $user_password=$_POST['password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
     $conf_user_password=$_POST['confirm_password'];
//     $user_address=$_POST['user_address'];
//     $user_contact=$_POST['user_contact'];
//    $user_image=$_FILES['user_image']['name'];
//    $user_image_tmp=$_FILES['user_image']['tmp_name'];
//    $user_ip=getIPAddress();  // access ip address from function folder

    // select query
    $select_query="SELECT * FROM admin_table WHERE admin_name='$user_username' or admin_email='$user_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>alert('Username & Email already exist')</script>";
    }else if($user_password !=$conf_user_password){
        echo "<script>alert('Password do not match')</script>";
    }
    else{
    
    $insert_query="INSERT INTO admin_table (admin_name,admin_email,admin_password) VALUES ('$user_username','$user_email','$hash_password')";
    $sql_execute=mysqli_query($con,$insert_query);
        
//        $_SESSION['username']=$user_username;
        echo "<script>alert('Logged in Successfully')</script>";
        echo "<script>window.open('admin_login.php','_self')</script>";
    }
}
?>