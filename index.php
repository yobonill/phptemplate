<?php  
	//Start the session if it is not already started
		if (!isset($_SESSION)) {
			session_start();
        }
	//Start the session if it is not already started

	//Define what values will have the variable $language, which store the data about every text in the web page
		if(isset($_GET['lang']) && is_file('lang/'. $_GET['lang'] .'.php')) {
			$lang = $_GET['lang'];
		} else {
			$lang = 'spanish';
		}
		$language = require_once('lang/'. $lang .'.php');
	//Define what values will have the variable $language, which store the data about every text in the web page

	//Load Configuration with config data as an array, to be able to use the directory root parameter
		require_once('config.php');
	//Load Configuration with config data as an array, to be able to use the directory root parameter

	//Require db and user model to use the functions in this file
		require_once($config['__DOCUMENT_ROOT__'] . '/models/user.model.php');
	//Require db and user model to use the functions in this file

	//Redirect to default view if actual view do not exist
		if(isLogin()) {
			if (!isset($_GET['view']) || isset($_GET['view']) && !is_file('core/views/'. $_GET['view'] . '.view.php') ) {
				header("Location: ?view=default");
			}
		} 
		elseif($_GET['view'] != 'login') {
			header("Location: ?view=login");
		}
	//Redirect to default view if actual view do not exist
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <meta name="mobile-web-app-capable" content="yes"> Activate this if you want the webpage to open in fullscreen when creating a shorcut -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title class="text-left"><?=$language ['__TITLE_APPNAME__'] ?></title>

        <!-- CSS AND FONTS -->
            <!-- Font-awesome CSS -->
                <link rel="stylesheet" href="third_party/fontawesome-5.15.1/css/all.min.css">
            <!-- Font-awesome CSS -->

            <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="third_party/bootstrap/css/bootstrap.min.css">
            <!-- Bootstrap CSS -->

            <!-- Conditional CSS -->
                <?php
                    if(isset($_GET['view'])){
                        $view = $_GET['view'];
                        if($view  == 'reports'){
                            ?>
                                <!-- DataTables CSS -->
                                    <link rel="stylesheet" href="third_party/dataTables/DataTables-1.10.22/css/jquery.dataTables.min.css">
                                    <!-- <link rel="stylesheet" href="third_party/dataTables/Buttons-1.6.5/css/buttons.dataTables.min.css"> -->
                                    <link rel="stylesheet" href="third_party/dataTables/FixedHeader-3.1.7/css/fixedHeader.dataTables.min.css">
                                    <link rel="stylesheet" href="third_party/dataTables/Responsive-2.2.6/css/responsive.dataTables.min.css">
                                <!-- DataTables CSS -->
                            <?php
                        }

                        //This checks if the actual view has a css with that name
                            if(is_file('css/' . $view . '.css')){
                                ?>
                                    <link rel="stylesheet" href="css/<?=$view?>.css">	
                                <?php
                            }
                        //This checks if the actual view has a css with that name

                        //Others
                            if($view == "someView"){
                                ?>
                                    <link rel="stylesheet" href="css/shoppingCart.css">	
                                    <link rel="stylesheet" href="third_party/bootstrap/css/bootstrap-select.min.css">	
                                    <link rel="stylesheet" href="third_party/bootstrap/css/bootstrap-datepicker.min.css">	
                                <?php
                            }
                        //Others
                    }
                ?>
            <!-- Conditional CSS -->

            <!-- General CSS -->
			    <link rel="stylesheet" href="css/general.css">		
		    <!-- General CSS -->
        <!-- CSS AND FONTS -->

        <!-- JavaScript Libraries -->
            <!-- jQuery -->
                <script src="third_party/jquery/jquery-3.5.1.min.js"></script>
            <!-- jQuery -->
            <?php
                if(isset($_GET['view'])){
                    if($_GET['view'] == 'someView'){
                        ?>
                            <!--jQuery validate-->
                                <script src="third_party/jquery/jquery.validate.min.js"></script>
                            <!--jQuery validate-->
                        <?php
                    }
                }
            ?>
            
            <!--SweetAlert-->
                <script src="third_party/sweetAlert/sweetalert.min.js"></script>
            <!--SweetAlert-->

            <!-- Bootstrap JavaScript -->
                <script src="third_party/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Bootstrap JavaScript -->

            <!-- Bootstrap JavaScript -->
            <script src="third_party/fontawesome-5.15.1/js/all.min.js"></script>
            <!-- Bootstrap JavaScript -->
            <?php
                if(isset($_GET['view'])){
                    $view = $_GET['view'];

                    if($view  == 'reports'){
                        ?>
                            <!-- DataTables JavaScript -->
                                <script src="third_party/dataTables/DataTables-1.10.22/js/jquery.dataTables.min.js"></script>
                                <script src="third_party/dataTables/JSZip-2.5.0/jszip.min.js"></script>
                                <!-- <script src="third_party/dataTables/pdfmake-0.1.32/pdfmake.min.js"></script>
                                <script src="dataTables/pdfmake-0.1.32/vfs_fonts.js"></script>
                                <script src="third_party/dataTables/Buttons-1.5.1/js/buttons.html5.min.js"></script> -->
                                <script src="third_party/dataTables/FixedHeader-3.1.7/js/dataTables.fixedHeader.min.js"></script>
                                <!-- <script src="third_party/dataTables/ColReorder-1.4.1/js/dataTables.colReorder.min.js"></script> -->
                                <script src="third_party/dataTables/Responsive-2.2.6/js/dataTables.responsive.min.js"></script>
                            <!-- DataTables JavaScript -->
                        <?php
                    }
                }
            ?>
        <!-- JavaScript Libraries -->
    </head>
    <body>
        <?php
            if(isset($_GET['view'])){
                $view = $_GET['view'];
                if($view != "someView"){
                    ?>
                        <!--HEADER-->
                            <div class="header">
                                <nav class="navbar navbar-dark bg-dark mb-4">
                                    <div class="container-fluid">
                                        <div class="row w-100">
                                            <div class="col-2">
                                                <a class="navbar-brand"><?= $language['__INSTITUTION_NAME__'] ?></a>
                                            </div>
                                            <div class="col-1 offset-9 pt-2">
                                                <?php if (isAdmin()): ?>
                                                    <!-- Link to admin features -->
                                                        <a href='?view=admin'>
                                                            <i class="fas fa-cog fa-lg side-button"></i>
                                                        </a>
                                                    <!-- Link to admin features -->
                                                <?php endif ?>
                                                <?php if (isLogin()): ?>
                                                    <!-- Logout Button -->
                                                        <a href='core/controllers/logout.controller.php'>
                                                            <i class="fas fa-power-off fa-lg side-button"></i>
                                                        </a>
                                                    <!-- Logout Button -->
                                                <?php endif ?>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                </nav>
                            </div>
                        <!--HEADER-->
                    <?php
                }
            } 
        ?>
        <!--CONTENT-->
            <div class="content">
                <div class="container-fluid" id="content">
                    <?php 

                        //We require the messages file, to be able to run messages sent via GET
                            require_once($config['__DOCUMENT_ROOT__'] . '/controllers/messages.controller.php');
                        //We require the messages files, to be able to run messages sent via GET

                        //Unset session msj data to avoid duplicated messages
                            if(isset($_SESSION['msj'])) {
                                unset($_SESSION['msj']);
                                unset( $_SESSION['msjTitle']);
                                unset($_SESSION['msjText']);
                            }
                        //Unset session msj data to avoid duplicated messages

                        //We assign a default value to the variable VIEW
                            if (isLogin()) {
                                $view = 'default';
                            } else {
                                $view = 'login';
                            }
                        //We assign a default value to the variable VIEW

                        //This checks if the view pass using get exist, and if the file that this view points exists
                            if (isset($_GET['view']) && is_file('core/views/'. $_GET['view'] . '.view.php')) {
                                $view = $_GET['view'];
                            }
                        //This checks if the view pass using get exist, and if the file that this view points exists

                        //This checks if the actual view has a controller with that name
                            if(is_file('core/controllers/' . $view . '.controller.php')){
                                require_once('core/controllers/' . $view . '.controller.php');
                            }
                        //This checks if the actual view has a controller with that name

                        //Print a back button if they are not in the default or login page
                            if ($view != 'default' && $view != 'login') {
                            ?>
                                <script type="text/javascript">
                                    $("#content").append("<a href='?view=default'><span class='fas fa-arrow-left back'></span></a>");
                                </script>
                            <?php 
                            }
                        //Print a back button if they are not in the default or login page

                        //If the view in get exist we show this view if not, show a default one
                            if(is_file('core/views/' . $view . '.view.php')){
                                require_once('core/views/' . $view . '.view.php');
                            }
                        //If the view in get exist we show this view if not, show a default one
                    ?>
                </div>
                <?php
                    if(isset($_GET['view'])){
                        $view = $_GET['view'];
                        if($view != "someView"){
                            ?>
                                <!--FOOTER-->
                                    <footer id="footer">
                                        <nav class="navbar fixed-bottom navbar-dark bg-dark">
                                            <a href="#" class="navbar-text ml-auto"><?= $language['__SIGN__']?></a>
                                        </nav>
                                    </footer>
                                <!--FOOTER-->
                            <?php
                        }
                    } 
                ?>

                <!-- Personal JavaScript -->
                    <script src="js/general.js"></script>
                <!-- Personal JavaScript -->

                <?php
                    if(isset($_GET['view'])){
                        $view = $_GET['view'];
                        //This checks if the actual view has a js with that name
                            if(is_file('js/' . $view . '.js')){
                                ?>
                                    <script src="js/<?=$view?>.js">	</script>
                                <?php
                            }
                            if($view == "someVie"){
                                ?>
                                    <link rel="stylesheet" href="css/shoppingCart.css">	
                                    <link rel="stylesheet" href="third_party/bootstrap/css/bootstrap-select.min.css">	
                                    <link rel="stylesheet" href="third_party/bootstrap/css/bootstrap-datepicker.min.css">	
                                <?php
                            }
                        //This checks if the actual view has a js with that name
                    }
                ?>
            </div>
        <!--CONTENT-->
    </body>
</html>
