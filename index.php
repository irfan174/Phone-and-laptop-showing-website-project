<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!--
-->

<html>
    <head>
        <title>BOOTSTRAP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php
        // put your code here
        mysql_connect("localhost", "root", "");
        mysql_select_db("projetdatabase");

        if (isset($_POST['search'])) {
            $searchq = $_POST['search'];
        }
        ?>


        <hr>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-2">
                    <h3 class="text-capitalize text-justify text-danger">GADGET CENTER</h3>
                </div>

                <div class="col-xs-12 col-sm-8 col-sm-offset-2 ">  

                    <nav class="p2">                        
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="home">Home</a></li>
                            <li><a href="#about">About us</a></li>                
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Products
                                    <span class="caret"></span>
                                </a>



                                <ul class="dropdown-menu">
                                    <li><a href="mobiles.php">Mobile</a></li>
                                    <li><a href="#">Laptop</a></li>


                                </ul>
                            </li>

                            <li><a href="#" data-toggle="modal" data-target="#irfan">Log In</a></li>                          
                            <li><a href="#" data-toggle="modal" data-target="#pitu">Sign up</a></li>


                        </ul>
                        
                    </nav>
                </div>  
               
                <div class="col-sm-3 col-sm-offset-7">
                    <form action="" method="" class="navbar-form navbar-right">
                        <div class="input-group">
                            <input type="Search" placeholder="Search..." class="form-control" />
                            <div class="input-group-btn">
                                <button class="btn btn-info">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        </div>
                    </form>

                </div> 

            </div>                                        
        </div>

    
    <hr>

    <div class="container " id="home">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <div class="carousel" data-ride="carousel" id="caro">
                    <ul class="carousel-indicators">
                        <li data-target="#caro" data-slide-to="0" class="active"></li>
                        <li data-target="#caro" data-slide-to="1" ></li>
                        <li data-target="#caro" data-slide-to="2" ></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/caro (1).jpg" alt="pasha" class="img-responsive"/>
                        </div>
                        <div class="item ">
                            <img src="images/caro (2).jpeg" alt="pitu" class="img-responsive"/>
                        </div>
                        <div class="item ">
                            <img src="images/caro (3).jpeg" alt="irfan" class="img-responsive"/>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-4 ">
                <nav>
                    <div class="row">
                        <ul class="nav nav-tabs"> 
                            <li class="active"><a href="#latest" data-toggle="tab">UPCOMING</a></li>
                            <li><a  href="#top" data-toggle="tab">LATEST</a></li>
                            <li><a  href="newhtml.html" data-toggle="tab">ACCESSORIES</a></li>

                        </ul>


                    </div>
            </div>
        </div>
    </div>




    <br>




    <h2 class="text-capitalize text-center">Our gadgets</h2>





    <br>
    <div class="container " id="about">
        <div class="row">
            <h3 class="text-center text-uppercase text-danger jumbotron">MOBILES</h3>
        </div>
    </div>

    <div class="container" id="gl">

        <div class="row">

            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic2.jpeg" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                    <div class="caption">
                        <h3>XIAOMI</h3>
                        <p>Welcome to our gadget center.We offer all types of XIAOMI phones</p>
                        <p><a class="btn btn-success" href="Xiaomi.php">view more</a> </p>
                    </div>
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic4.jpeg" alt="one" class="img-responsive popv">
                    <div class="caption">
                        <h3>SAMSUNG</h3>
                        <p>Welcome to our gadget center.We offer all types of SAMSUNG phones</p>
                        <p><a class="btn btn-success" href="Samsung.php">view more</a></p>
                    </div>
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic1.jpeg" alt="two" class="img-responsive"/>
                    <div class="caption">
                        <h3>NOKIA</h3>
                        <p>Welcome to our gadget center.We offer all types of NOKIA phones</p>
                        <p><a class="btn btn-success" href="Nokia.php">view more</a></p>
                    </div>
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic3.jpeg" alt="one" class="img-responsive">
                    <div class="caption">
                        <h3>OPPO</h3>
                        <p>Welcome to our gadget center.We offer all types of OPPO phones</p>
                        <p><a class="btn btn-success" href="#">view more</a></p>
                    </div>
                </div>                 
            </div>





            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic2.jpeg" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                    <div class="caption">
                        <h3>HUAWEI</h3>
                        <p>Welcome to our gadget center.We offer all types of HUAWEI phones</p>
                        <p><a class="btn btn-success" href="#">view more</a> </p>
                    </div>
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic4.jpeg" alt="one" class="img-responsive popv">
                    <div class="caption">
                        <h3>WE</h3>
                        <p>Welcome to our gadget center.We offer all types of WE phones</p>
                        <p><a class="btn btn-success" href="#">view more</a></p>
                    </div>
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic1.jpeg" alt="two" class="img-responsive"/>
                    <div class="caption">
                        <h3>WALTON</h3>
                        <p>Welcome to our gadget center.We offer all types of WALTON phones</p>
                        <p><a class="btn btn-success" href="#">view more</a></p>
                    </div>
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic3.jpeg" alt="one" class="img-responsive">
                    <div class="caption">
                        <h3>SYMPHONY</h3>
                        <p>Welcome to our gadget center.We offer all types of SYMPHONY phones</p>
                        <p><a class="btn btn-success" href="#">view more</a></p>
                    </div>
                </div>                 
            </div>


        </div>
    </div>
    
    
    
    
    <div class="container " id="about">
        <div class="row">
            <h3 class="text-center text-uppercase text-danger jumbotron">LAPTOPS</h3>
        </div>
    </div>
    <br>
    <div class="container" id="gl">

        <div class="row">

            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic2.jpeg" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                    <div class="caption">
                        <h3>ASUS</h3>
                        <p>Welcome to our gadget center.We offer all types of ASUS laptops</p>
                        <p><a class="btn btn-success" href="#">view more</a> </p>
                    </div>
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic4.jpeg" alt="one" class="img-responsive popv">
                    <div class="caption">
                        <h3>DELL</h3>
                        <p>Welcome to our gadget center.We offer all types of DELL laptops</p>
                        <p><a class="btn btn-success" href="#">view more</a></p>
                    </div>
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic1.jpeg" alt="two" class="img-responsive"/>
                    <div class="caption">
                        <h3>SAMSUNG</h3>
                        <p>Welcome to our gadget center.We offer all types of SAMSUNG laptops</p>
                        <p><a class="btn btn-success" href="#">view more</a></p>
                    </div>
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic3.jpeg" alt="one" class="img-responsive">
                    <div class="caption">
                        <h3>HP</h3>
                        <p>Welcome to our gadget center.We offer all types of HP laptops</p>
                        <p><a class="btn btn-success" href="#">view more</a></p>
                    </div>
                </div>                 
            </div>





            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic2.jpeg" alt="one" class="img-responsive" data-toggle="modal" data-target="#mito">
                    <div class="caption">
                        <h3>ACER</h3>
                        <p>Welcome to our gadget center.We offer all types of ACER laptops</p>
                        <p><a class="btn btn-success" href="#">view more</a> </p>
                    </div>
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic4.jpeg" alt="one" class="img-responsive popv">
                    <div class="caption">
                        <h3>LENOVO</h3>
                        <p>Welcome to our gadget center.We offer all types of LENOVO laptops</p>
                        <p><a class="btn btn-success" href="#">view more</a></p>
                    </div>
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic1.jpeg" alt="two" class="img-responsive"/>
                    <div class="caption">
                        <h3>MICROSOFT</h3>
                        <p>Welcome to our gadget center.We offer all types of MICROSOFT laptops</p>
                        <p><a class="btn btn-success" href="#">view more</a></p>
                    </div>
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="thumbnail">
                    <img src="images/pic3.jpeg" alt="one" class="img-responsive">
                    <div class="caption">
                        <h3>APPLE</h3>
                        <p>Welcome to our gadget center.We offer all types of APPLE laptops</p>
                        <p><a class="btn btn-success" href="#">view more</a></p>
                    </div>
                </div>                 
            </div>


        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="modal" id="irfan">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="btn-success text-center text-capitalize" >Customer Log In</h3>
                        </div>
                        <div class="modal-body">
                            <form>


                                <div class="form-group">
                                    <label class="text-uppercase">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="type your mail address">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">Password</label>
                                    <input type="text" name="Password" class="form-control" placeholder="type your  Password">
                                </div>



                            </form>
                            <button class="text-center btn btn-success">log in</button>
                        </div>
                        <div class="modal-footer">

                            <div class="col-xs-12 col-sm-2 col-sm-offset-10 text-right">
                                <button class="btn btn-danger" data-dismiss="modal">&times;</button>
                            </div>
                        </div>
                    </div>                       
                </div>
            </div>
        </div>
    </div>





    





    <div class="container">
        <div class="row">
            <div class="modal" id="pitu">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="text-center text-danger">Create Your own Account</h3>
                        </div>
                        <div class="modal-body">
                            <form >
                                <div class="form-group">
                                    <label class="text-uppercase">Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="type your name">
                                </div>

                                <div class="form-group">
                                    <label class="text-uppercase">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="type your mail address">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">Password</label>
                                    <input type="text" name="Password" class="form-control" placeholder="type your  Password">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">Address</label>
                                    <input type="text" name="Password" class="form-control" placeholder="type your  Password">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">Phone</label>
                                    <input type="text" name="Password" class="form-control" placeholder="type your  Password">
                                </div>


                            </form>
                            <button type="submit" class="text-center btn btn-danger">Sign Up</button>
                        </div>
                        <div class="modal-footer">

                            <div class="col-xs-12 col-sm-2 col-sm-offset-10 text-right">
                                <button  class="btn btn-danger" type="submit" data-dismiss="modal">&times;</button>
                            </div>
                        </div>
                    </div>                       
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <h6>   &COPY; 2017||All rights reserved by LUBNA</a></h6>
                </div>
                <div class="col-xs-12 col-sm-4 col-sm-offset-4 text-right ">
                    <h6>   &COPY; 2016||All rights reserved by IRFAN</a></h6>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $(".ex").tooltip();
        });
    </script>
    <script>$(function () {
            $(".popv").popover("show");
        });
    </script>


    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
