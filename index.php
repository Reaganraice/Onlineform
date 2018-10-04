<?php
require 'dbh.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LEARNING COURSE</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <?php


    if($_SERVER['REQUEST_METHOD']=='POST'){
       
        if(isset($_POST['register'])){
            require 'sign.php';
        }
     
    }
      
   
    ?>
    <body>
         <div class="form">
                <div id="square">    
                </div>
                <h1 class="title">CODING COURSE</h1>
                <div class="tab-content">
                    <div class="content1 content">
                    </div>
                    <div class="content2 content">
                        <h2 class="signsub">CREATE A NEW ACCOUNT </h2>
                        <form action="sign.php" method="POST">
                                <p id="intro">Free joining  on our website and get 50% discount after registered.</p>
                        <div class="field-wrap">
                                <input type="text" name="firstname" placeholder="First name">
                            </div>
                        <div class="field-wrap">
                                <input type="text" name="lastname" placeholder="Last name">
                            </div>
                        <div class="field-wrap">
                                <input type="email" name="email" placeholder="Email address">
                            </div>
                            <div class="field-wrap">
                            <button type="submit" class="button-button-block" name="register">Sign up</button>
                            </div>
                            <div class="field-wrap">
                                <h6 id="condi"><a href="">Terms and conditions</a> </h6>
                            </div>
                        </form>
                    </div>
                </div> <!-- tab-content -->
         </div> <!-- /form -->
         <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
          <script src="js/index.js"></script>  
    </body>
</html>