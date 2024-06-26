<?php
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Ecommerce Website Usin PHP and MySQL.</title>
        
        <!-- Bootstrap css link-->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        
        <!-- Font Awesome link-->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjry1PvoDwiPUiKdWk5t3Pyo1Y1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        
        <!--CSS File-->
        <link rel="stylesheet" href="style.css" class="logo">
    </head>
    
    <body>
        <div class="container-fluid p-0">
        
        <!--first child-->
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <div class="container-fluid">
                    <img src="./images/Coupling.jpg" alt="" class="logo">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="display_all.php">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./users_area/user_registration.php">Register</a>
                            </li>
                         
                            <li class="nav-item">
                                <a class="nav-link" href="a">Contact</a>
                            </li>
                        
                            <li class="nav-item">
                                <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                            </li>
                        
                            <li class="nav-item">
                                <a class="nav-link" href="cart.php">Total Price: <?php total_cart_price();?>/-</a>
                            </li>
                        
                        </ul>
                        <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" arial-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                        
                        </form>
                    </div>
        </div>
            </nav>
            
            <!--Second Child-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                 <?php
                //displayiny username of logged in user
                if(!isset($_SESSION['username'])){
                    echo "<li class='nav-item'>
                    <a class='nav-link' href='#'>Welcome Guest</a>
                </li>";
                }else{
                    echo "<li class='nav-item'>
                    <a class='nav-link' href='#'>Welcome  ".$_SESSION['username']."</a>
                </li>";
                }
                //checking if user is logged in or not
                if(!isset($_SESSION['username'])){
                    echo "<li class='nav-item'>
                    <a class='nav-link' href='./users_area/user_login.php'>Login</a>
                </li>";
                }else{
                    echo "<li class='nav-item'>
                    <a class='nav-link' href='./users_area/logout.php'>Logout</a>
                </li>";
                }
                ?>
            </ul>
            </nav>
            <!--Third Child-->
            <div class="bg-light">
                <h3 class="text-center">Hidden Store</h3>
                <p class="text-center">Communications is at the heart of e-commerce and community</p>
            </div>
            
            
            <!--Fourth Class-->
        <div class="row px-1">
            <div class="col-md-10">
            <!--products-->
                <div class="row">
<!--                    calling function-->
                    <?php
                    get_all_products();
                    get_unique_categories();
                    get_unique_brands();
                    ?>
<!--                    row end-->
                </div>
<!--                col end-->
            </div>
             <div class="col-md-2 bg-secondary p-0">
                 <!--Brands to be displayed-->
                 <ul class="navbar-nav me-auto text-center">
                     <li class="nav-item bg-info">
                         <a href="" class="nav-link text-light"><h4>Delivery Brands</h4></a>
                     </li>
<!--                     calling function-->
                     <?php
                    getbrands();                
                     ?>
                 </ul>
                 
                 <!--Category to be displayed-->
                 <ul class="navbar-nav me-auto text-center">
                     <li class="nav-item bg-info">
                         <a href=" " class="nav-link text-light"><h4>Categories</h4></a>
                     </li>
                     
<!--                     calling function-->
                     <?php
                    getcategories();
                     ?>
                 </ul>
            </div>
            </div>   
                
            <!-- last child -->
<!--include footer-->
            <?php
            include("./includes/footer.php");
            ?>
            </div>
        
    <!-- Bootstrap JS link-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+lp" crossorigin="anonymous"></script>        
    </body>
         
</html>
        