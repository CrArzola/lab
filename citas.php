<!DOCTYPE html>
<html style="height:100%">
<head>
	
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php include("titulo/titulo.php") ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="css/leaguespartan.css" rel="stylesheet">
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/revolution_style.css">
    <link rel="stylesheet" href="css/rs-settings.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/space.css">
    <link rel="stylesheet" href="css/overright.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>


</head>

<body data-spy="scroll" data-target=".mainmenu-area"> 


	    <header class="header-area relative" id="home">
        <nav class="navbar mainmenu-area navbar-fixed-top" data-spy="affix" data-offset-top="100">
            <div class="container">
                <div class="navbar-header smoth-scroll">
                    <a href="#home" class="navbar-brand"><img src="images/logo.png" alt=""></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse " id="mainmenu">
                    <a href="citas.php" class="btn btn-default navbar-btn navbar-right hidden-xs">Citas Realizadas</a>
                    <ul class="nav navbar-nav navbar-right smoth-scroll">
                        <li class="active"><a href="index.php#home">Inicio</a></li>
                        <li><a href="index.php#about">Acerca de</a></li>
                        <li><a href="index.php#service">Servicios</a></li>
                        <li><a href="index.php#facilites">Instalaciones</a></li>
                        <li><a href="index.php#doctor">Doctor</a></li>
                        <li><a href="index.php#blog">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<div style="height:auto; min-height:100%; "> 

<div style="text-align: center; width:800px; margin-left: -400px; position:absolute; top: 30%; left:50%;">

<h1 style="margin:0; font-size:150px; line-height:150px; font-weight:bold;">Citas</h1>

<h2 style="margin-top:20px;font-size: 30px;">Programadas</h2>

<p>
	

			<?php

				require("conexiones/connect_db.php");
				$sql=("SELECT * FROM citas");
	
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>nombres</td>";
						echo "<td>email</td>";
						echo "<td>mensaje</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";

						echo "<td><a href='citas.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' width='50' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM citas WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='citas.php'</script>";
					}

			?>




</p>

</div>
</div>

    <footer class="bg-white">
        <div class="space-15"></div>
        <div class="container">
            <div class="row xs-center">
                <div class="col-xs-12 col-sm-6">
                    <img src="images/logo.png" width="100" alt="">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="space-5"></div>
                    <ul class="list-inline list-unstyled social-list text-right xs-center">
                        <li><a href="https://www.facebook.com/groups/chiphysiprogramacion/" target="_black"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC87BrnQy7Y6iipGvQ6sAJfQ" target="_black"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="space-15"></div>
    </footer>


</body></html>
