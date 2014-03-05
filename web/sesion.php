<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" ng-app>
    <head>
        <title>UNO Contact Solutions Bureau</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />         
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /><!-- Etiqueta proporcionada por Bootstrap ???-->         

        <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
      <!--  <script src="https://code.jquery.com/jquery.js"></script>-->
        <script src="dist/js/bootstrap.min.js"></script>

      <!--	<script type='text/javascript' src='scripts/jquery-1.7.2.min.js'></script>-->
        <script type='text/javascript' src='libs/angular/angular.min.js'></script>
        <script type='text/javascript' src='js/login.js'></script>
        <style type='text/css'>
            .panel-info>.panel-heading{
                color:#FFF;
                background-color: #BB1F25;
                border-color: #FFAAAA;
            }
            .panel-info {
                border-color: #FFAAAA;
            }
            img{
                margin:140px auto 0;
                width:220px;
                display:block;
            }
        </style>

    </head>


    <?php //ob_start(); ?> 
    <div class="container">
        <img src="imgs/logo.png" width="220" height="79" />
        <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Favor de loguearse</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px;"><a href="#" style="color:#E4E4E4;">Forgot password?</a></div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <div ng-controller="LoginController">
                    <form class="form-horizontal" role="form"  ng-submit="loginAction(login)" name="login"  >

                                                    <div style="margin-bottom: 25px" class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                            
                                                            <input ng-model="login.email" type="text"  id="inputEmail1" class="form-control" placeholder="Correo electrónico" required="" autofocus="" name='ca_user'>
                                                    </div>

                                                    <div style="margin-bottom: 25px" class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                        <input ng-model="login.password" id="inputPassword1" type="password" class="form-control" placeholder="Contraseña" required="">
                                                    </div>
                                                        <input type="hidden" name="ca_appname"/>


                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1" disabled> Remember me
                                </label>
                            </div>
                        </div>


                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                                <!--<a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->
                                <button ng-show="login.$valid" class="btn btn-lg btn-primary btn-block" type="submit">Accesar</button>        
        <span class="text-danger" ng-show="user.length == 0">{{msg}}</span>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid #FFAAAA; padding-top:15px; font-size:85%" >
                                    No tengo una cuenta! 
                                    <a href="registro.php"  onclick="return false"><!--onClick="$('#loginbox').hide(); $('#signupbox').show()"-->
                                        Reg&iacute;strate aqu&iacute
                                    </a>
                                </div>
                            </div>
                        </div>    
                    </form>     
                        </div>


                </div>                     
            </div>  
        </div>




        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide();
                 $('#loginbox').show()">Sign In</a></div>
                </div>  
                <div class="panel-body" >
                    <form id="signupform" class="form-horizontal" role="form">

                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>



                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="firstname" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="passwd" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="icode" placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button -->                                        
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                <span style="margin-left:8px;">or</span>  
                            </div>
                        </div>

                        <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                            </div>                                           

                        </div>



                    </form>
                </div>
            </div>                                              
        </div> 		


    </div>
</html>
<?php //$contenido = ob_get_clean(); ?>



<!--<a href="index.php">Inicio</a>-->
