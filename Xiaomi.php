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
                    <h1 class="text-capitalize text-justify text-danger">Xiaomi</h1>
                </div>          
            </div>                                        
        </div>
        <div class="container">
            <div class="row">
                 <div class="col-xs-12 col-sm-2">
                    <div class="thumbnail">
                        <div >
                            <?php $res = mysql_query("select * from product where brand_name='xiaomi'AND model_name='redmi 4x'"); ?>
                            <?php while ($row = mysql_fetch_array($res)) { ?>
                                <img src="<?php echo $row['photo']; ?>" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                                <h4><?php echo $row['model_name']; ?> </h4> 
                                <p><?php echo $row['price']; ?> </p>
                                <p><a class="btn btn-success" href="redmi 4x.php">Detailes</a></p><?php } ?>

                        </div> 
                    </div>

                </div>

                <div class="col-xs-12 col-sm-2">
                    <div class="thumbnail">
                        <div >
                            <?php $res = mysql_query("select * from product where brand_name='xiaomi'AND model_name='redmi note 4x'  AND description='ram 3gb rom 32gb'"); ?>
                            <?php while ($row = mysql_fetch_array($res)) { ?>
                                <img src="<?php echo $row['photo']; ?>" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                                <h4><?php echo $row['model_name']; ?> </h4> 
                                <p><?php echo $row['price']; ?> </p>
                                <p><a class="btn btn-success" href="redmi note 4x.php">Detailes</a></p><?php } ?>

                        </div> 
                    </div>

                </div>
                <div class="col-xs-12 col-sm-2">
                    <div class="thumbnail">
                        <div >
                            <?php $res = mysql_query("select * from product where brand_name='xiaomi'AND model_name='redmi note 4x' AND description='ram 4gb rom 64gb'"); ?>
                            <?php while ($row = mysql_fetch_array($res)) { ?>
                                <img src="<?php echo $row['photo']; ?>" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                                <h4><?php echo $row['model_name']; ?> </h4> 
                                <p><?php echo $row['price']; ?> </p>
                               
                                <p><a class="btn btn-success" href="redmi note 4x+.php">Detailes</a></p><?php } ?>

                        </div> 
                    </div>
                     <?php $res = mysql_query("select * from product where brand_name='xiaomi'AND model_name='redmi note 4x' AND description='ram 4gb rom 64gb'"); ?>
                            <?php while ($row = mysql_fetch_array($res)) { ?>
                                <p><?php echo $row['description']; ?> <?php } ?> </p>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <div class="thumbnail">
                        <div >
                            <?php $res = mysql_query("select * from product where brand_name='xiaomi'AND model_name='mi 5'"); ?>
                            <?php while ($row = mysql_fetch_array($res)) { ?>
                                <img src="<?php echo $row['photo']; ?>" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                                <h4><?php echo $row['model_name']; ?> </h4> 
                                <p><?php echo $row['price']; ?> </p>
                                <p><a class="btn btn-success" href="mi5.php">Detailes</a></p><?php } ?>

                        </div> 
                    </div>

                </div>
                <div class="col-xs-12 col-sm-2">
                    <div class="thumbnail">
                        <div >
                            <?php $res = mysql_query("select * from product where brand_name='xiaomi'AND model_name='mi5s'"); ?>
                            <?php while ($row = mysql_fetch_array($res)) { ?>
                                <img src="<?php echo $row['photo']; ?>" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                                <h4><?php echo $row['model_name']; ?> </h4> 
                                <p><?php echo $row['price']; ?> </p>
                                <p><a class="btn btn-success" href="mi5s.php">Detailes</a></p><?php } ?>

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

