<?php
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : 'products';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucwords(str_replace('_','',$page)) ?> | Nazee's Supermarket</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="./select2/js/select2.min.js"></script>
    <script src="js/script.js"></script>
    
    <style>
        html,body{
            height:100%;
            width:100%;
        }
        main{
            height:100%;
            display:flex;
            flex-flow:column;
        }
        #page-container{
            flex: 1 1 auto; 
            overflow:auto;
        }
        #topNavBar{
            flex: 0 1 auto; 
        }
        .thumbnail-img{
            width:50px;
            height:50px;
            margin:2px
        }
        .truncate-1 {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
        .truncate-3 {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
        .modal-dialog.large {
            width: 80% !important;
            max-width: unset;
        }
        .modal-dialog.mid-large {
            width: 50% !important;
            max-width: unset;
        }
        @media (max-width:720px){
            
            .modal-dialog.large {
                width: 100% !important;
                max-width: unset;
            }
            .modal-dialog.mid-large {
                width: 100% !important;
                max-width: unset;
            }  
        
        }
        .display-select-image{
            width:60px;
            height:60px;
            margin:2px
        }
        img.display-image {
            width: 100%;
            height: 45vh;
            object-fit: cover;
            background: black;
        }
        /* width */
        ::-webkit-scrollbar {
        width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        background: #f1f1f1; 
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: #888; 
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: #555; 
        }
        .img-del-btn{
            right: 2px;
            top: -3px;
        }
        .img-del-btn>.btn{
            font-size: 10px;
            padding: 0px 2px !important;
        }
    </style>
</head>
<body>
    <main>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger bg-gradient" id="topNavBar">
        <div class="container">
            <a class="navbar-brand" href="#">
            Nazee's Supermarket
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div>
            <?php if(isset($_SESSION['customer_id']) && $_SESSION['customer_id'] > 0): ?>

            <?php else: ?>
                <a href="javascript:void(0)" id="login-btn" class="btn btn-light">Login</a>
                |
                <a href="javascript:void(0)" id="register-btn" class="btn btn-light">Register</a>
            <?php endif; ?>

            </div>
        </div>
    </nav>
    <div class="container py-3" id="page-container">
        <?php 
            if(isset($_SESSION['flashdata'])):
        ?>
        <div class="dynamic_alert alert alert-<?php echo $_SESSION['flashdata']['type'] ?>">
        <div class="float-end"><a href="javascript:void(0)" class="text-dark text-decoration-none" onclick="$(this).closest('.dynamic_alert').hide('slow').remove()">x</a></div>
            <?php echo $_SESSION['flashdata']['msg'] ?>
        </div>
        <?php unset($_SESSION['flashdata']) ?>
        <?php endif; ?>
        <?php
        ?>
    </div>
    </main>
    <div class="modal fade" id="uni_modal" role='dialog' data-bs-backdrop="static" data-bs-keyboard="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"></h5>
        </div>
        <div class="modal-body">
        </div>



    <script>
        $(function(){
            $('#register-btn').click(function(){
                uni_modal("Register New Account","register.php","mid-large");
            })
            $('#login-btn').click(function(){
                uni_modal('Please Enter your Login Credentials',"login.php")
            })
        })
    </script>
</body>
</html>