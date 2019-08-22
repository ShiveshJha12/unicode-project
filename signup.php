<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <title>to do</title>
    </head>
    <body>
        <div class="container-fluid uhk">
           
      <?php
include 'header.php';
?>
        <p>&nbsp;</p><p>&nbsp;</p>
        <div class="container ">
            <div class="row ">
                <div class="col-xs-5"><p>&nbsp;</p>
                    <img src="img/mobile1.jpg" class="img-responsive" alt="k"></img>
                </div>
                <div class="col-xs-5 col-xs-offset-2">
                    <h1>SIGN UP</h1><br>
                    <form method="post" action="user_reg.php" >
                       
                        <div class="form-group"><label for="name"></label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                        </div>
                          <div class="form-group"><label for="email"></label>
                             <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                          <div class="form-group"><label for="password"></label>
                             <input type="text" class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                          <div class="form-group"><label for="contact"></label>
                             <input type="number" class="form-control" id="contact" placeholder="Contact" name="contact">
                        </div>
                         <div class="form-group"><label for="name"></label>
                             <input type="text" class="form-control" placeholder="City" name="city">
                        </div>
                         <div class="form-group"><label for="name"></label>
                             <input type="text" class="form-control" placeholder="Address" name="address">
                        </div>
                        <button type="submit" class="btn-group-justified btn-group-lg">Submit</button>
                         
                    </form>
                    
                </div>
            </div>
        </div>
        </div>
    </body>
</html>