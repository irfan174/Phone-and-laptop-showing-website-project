<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Products</title>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        // put your code here
        mysql_connect("localhost", "root", "");
        mysql_select_db("projetdatabase");
        ?>



        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-1">
                    <h1 class="text-capitalize text-justify text-danger">Samsung</h1>
                </div>          

            </div>
        </div>
        <br>


        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-2">
                    <div class="thumbnail">
                        <div >
                            <?php $res = mysql_query("select * from product where brand_name='samsung'AND model_name='galaxy j7 pro'"); ?>
                            <?php while ($row = mysql_fetch_array($res)) { ?>
                                <img src="<?php echo $row['photo']; ?>" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                                <h4><?php echo $row['model_name']; ?> </h4> 
                                <p><?php echo $row['price']; ?> </p>
                                <p><a class="btn btn-success" href="galaxy j7 pro.php">Detailes</a></p><?php } ?>
                        </div> 
                    </div>
                </div>

                <div class="col-xs-12 col-sm-2">
                    <div class="thumbnail">
                        <div >
                            <?php $res = mysql_query("select * from product where brand_name='samsung'AND model_name='galaxy s8 pro'"); ?>
                            <?php while ($row = mysql_fetch_array($res)) { ?>
                                <img src="<?php echo $row['photo']; ?>" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                                <h4><?php echo $row['model_name']; ?> </h4> 
                                <p><?php echo $row['price']; ?> </p>
                                <p><a class="btn btn-success" href="galaxy s8 pro.php">Detailes</a></p><?php } ?>

                        </div> 
                    </div>

                </div>
                <div class="col-xs-12 col-sm-2">
                    <div class="thumbnail">
                        <div >
                            <?php $res = mysql_query("select * from product where brand_name='samsung'AND model_name='galaxy s8 pro dous'"); ?>
                            <?php while ($row = mysql_fetch_array($res)) { ?>
                                <img src="<?php echo $row['photo']; ?>" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                                <h4><?php echo $row['model_name']; ?> </h4> 
                                <p><?php echo $row['price']; ?> </p>
                                <p><a class="btn btn-success" href="galaxy s8 pro dous.php">Detailes</a></p><?php } ?>

                        </div> 
                    </div>

                </div>
                <div class="col-xs-12 col-sm-2">
                    <div class="thumbnail">
                        <div >
                            <?php $res = mysql_query("select * from product where brand_name='samsung'AND model_name='galaxy c9pro'"); ?>
                            <?php while ($row = mysql_fetch_array($res)) { ?>
                                <img src="<?php echo $row['photo']; ?>" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                                <h4><?php echo $row['model_name']; ?> </h4> 
                                <p><?php echo $row['price']; ?> </p>
                                <p><a class="btn btn-success" href="galaxy c9pro.php">Detailes</a></p><?php } ?>

                        </div> 
                    </div>

                </div>
            </div>

        </div>




        
        






        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>
