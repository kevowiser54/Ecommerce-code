<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        
        <!--Bootstrap css Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        
    
          <!-- Font Awesome link-->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjry1PvoDwiPUiKdWk5t3Pyo1Y1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        
        <!--CSS File -->
         <link rel="stylesheet" href="style.css" class="logo">
        <style>
            .admin_image{
                width: 100px;
                object-fit: contain;
            }
            .footer{
                position: absolute;
                bottom: 0;
            }
            body{
                overflow-x: hidden;
            }
            .product_img{
                width: 100px;
                object-fit: contain;
            }
        </style>
    </head>
    <body>
        <!--navbar-->
        <div class="container-fluid  p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <div class="container-fluid">
                    <img src="...images/747028-01.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            
                        </li>
                        
                    </ul>
                        

                </nav>
                </div>
            </nav>

            <!--Second Child-->
            <div class="bg-light text-center m-auto">
                <h3>Manage Details</h3>
            </div>
<!--             third child-->
            <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                    <div class="p-3">
                        <a href=""><img src="../images/5kg-cocopeat-block-500x500-1-300x300.jpg" alt="" class="admin_image"></a>
                       <?php echo "<p class='text-light text-center'>Admin Name: ".$_SESSION['admin_name']." </p>"; ?>
                    </div>
                    <div class="button text-center">
                        <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a> </button>
                        <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
                        <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a> </button>
                        <button><a href="index.php?view_categories" class="nav-link text-light bg-info my-1">View Categories</a> </button>
                        <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a> </button>
                        <button><a href="index.php?view_brands" class="nav-link text-light bg-info my-1">View Brands</a> </button>
                        <button><a href="index.php?list_orders" class="nav-link text-light bg-info my-1">All Orders</a> </button>
                        <button><a href="index.php?list_payments" class="nav-link text-light bg-info my-1">All Payments</a> </button>
                        <button><a href="index.php?list_users" class="nav-link text-light bg-info my-1">List Users</a> </button>
                        <button><?php echo "<a class='nav-link text-light bg-info my-1' href='../users_area/logout.php'>Logout</a>"; ?> </button> 
                    </div>
                </div>
            </div>
<!--            fourth child-->
            <div class="container my-3">
                <?php
                if(isset($_GET['insert_category'])){
                    include('insert_categories.php');
                }
                if(isset($_GET['insert_brand'])){
                    include('insert_brands.php');
                }
                if(isset($_GET['view_products'])){
                    include('view_products.php');
                }
                if(isset($_GET['edit_products'])){
                    include('edit_products.php');
                }
                if(isset($_GET['delete_product'])){
                    include('delete_product.php');
                }
                 if(isset($_GET['view_categories'])){
                    include('view_categories.php');
                }
                 if(isset($_GET['view_brands'])){
                    include('view_brands.php');
                }
                 if(isset($_GET['edit_category'])){
                    include('edit_category.php');
                }
                 if(isset($_GET['edit_brands'])){
                    include('edit_brands.php');
                }
                if(isset($_GET['delete_category'])){
                    include('delete_category.php');
                }
                if(isset($_GET['delete_brands'])){
                    include('delete_brands.php');
                }
                if(isset($_GET['list_orders'])){
                    include('list_orders.php');
                }
                if(isset($_GET['list_payments'])){
                    include('list_payments.php');
                }
                if(isset($_GET['list_users'])){
                    include('list_users.php');
                }
                ?>
                
            </div>
            
<!--            last child-->
<!--
            <div class="bg-info p-3 text-center footer">
                <p>All rights reserved 0- Designed by Kevowiser-2022</p>
            </div>
-->
         <?php include("../includes/footer.php"); ?>
        </div>

<!-- Bootstrap JS link-->      
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>