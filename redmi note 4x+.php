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
        <title></title>
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

                <div class="col-xs-12 col-sm-5">

                    <?php $res = mysql_query("select * from product where brand_name='xiaomi'AND model_name='redmi note 4x' AND description='ram 4gb rom 64gb'"); ?>
                    <?php while ($row = mysql_fetch_array($res)) { ?>
                        <h1 class="text-capitalize text-justify text-danger" ><?php echo $row['model_name']; ?> </h1>
                    <?php } ?>
                </div>

                <br>


            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">

                    <?php $res = mysql_query("select * from product where brand_name='xiaomi'AND model_name='redmi note 4x' AND description='ram 4gb rom 64gb'"); ?>
                    <?php while ($row = mysql_fetch_array($res)) { ?>
                        <img  src="<?php echo $row['photo']; ?>" alt="one" class="img-responsive" width="600" data-toggle="modal" data-target="#mito"> </h1>
                    <?php } ?>


                </div>

            </div>

        </div>
        <br>
        
         <?php $res = mysql_query("select * from product where brand_name='xiaomi'AND model_name='redmi note 4x' AND description='ram 4gb rom 64gb'"); ?>
                    <?php while ($row = mysql_fetch_array($res)) { ?>
        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-6">

                    <?php $res = mysql_query("select * from product where brand_name='xiaomi'AND model_name='redmi note 4x' AND description='ram 4gb rom 64gb'"); ?>
                    <?php while ($row = mysql_fetch_array($res)) { ?>
                        <h3 class="text-capitalize text-justify text-danger" ><?php echo $row['price']; ?> </h3>
                    <?php } ?>
                </div>
            
               
                

            </div>
        </div>
        <br>
        <?php } ?>
        
        
        <?php $res = mysql_query("select * from product where brand_name='xiaomi'AND model_name='redmi note 4x'AND description='ram 4gb rom 64gb'"); ?>
        <?php while ($row = mysql_fetch_array($res)) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 ">
                        <table class="table table-striped">
                            <tr>
                                <th>Config</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>Brand</td>
                                <td><?php echo $row['brand_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Ram & Storage</td>
                                <td><?php echo $row['description']; ?></td>
                            </tr>
                            <tr>
                                <td>Display</td>
                                <td><?php echo $row['display']; ?></td>
                            </tr>
                            <tr>
                                <td>Processor</td>
                                <td><?php echo $row['processor']; ?></td>
                            </tr>
                            <tr>
                                <td>Camera</td>
                                <td><?php echo $row['camera']; ?></td>
                            </tr>
                            <tr>
                                <td>Battery</td>
                                <td><?php echo $row['batttery']; ?></td> <?php } ?>
                        </tr>

                    </table>
                </div>

            </div>

        </div>
        
          <br>
         <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 ">
                   <p><a class="btn btn-success" href="#">ORDER</a></p>
                </div>
            </div>
        </div>




        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>






