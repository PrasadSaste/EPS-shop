<?php
session_start();
?>

<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="">
                       
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <img src="img/camera.jpg" alt="Camera">
                           
                           <center>
                                <div class="caption">
                                        <p id="autoResize">
                                        <a href="camera.php">
                                            Cameras</p>
                           </a>    
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <img src="img/bp1.jpg" alt="Watch">
                           
                           <center>
                                <div class="caption">
                                    <p id="autoResize">
                                    <a href="phone.php">
                                        Mobiles</p>
                           </a>    
                                    <p>Original Mobiles from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <img src="img/bl1.jpg" alt="Shirt">
                           <center>
                               <div class="caption">
                                   <p id="autoResize">
                                   <a href="laptop.php">
                                       Laptops</p>
                           </a>
                           
                                   <p>Our exquisite collection of Laptops.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>