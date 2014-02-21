<!DOCTYPE html>
<html>
    <head>
        <?php include 'header.php'; ?>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		
		<link rel="stylesheet" href="css/flexslider.css">
		
        <link rel="shortcut icon" href="http://us.123rf.com/400wm/400/400/kentoh/kentoh0902/kentoh090200006/4231082-una-tecnologia-de-datos-multimedia-como-arte-antecedentes.jpg"/>
    </head>
    <body>
        <div id="contenedor">
            <div id="header"><h1>M&Oacute;N VIRTUAL</h1></div>
            <div id="menu">
                <?php include 'menu.php'; ?>
            </div>
            
            <div id="cos">
 <!-- Primera part codi html estandar -->               	
                <div id="slider">
                    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
                    <script type="text/javascript" charset="utf-8">
                        $(window).load(function() {
                          $('.flexslider').flexslider({
                            controlsContainer: '.flex-container'
                            });
                        });
                    </script>
                    <div class="flex-container">
                        <div class="flexslider">
                            <ul class="slides">
				<li><img id="imagen1" src="imagenes/imagen1.jpg" alt="imagen 1"></li>
				<li><img id="imagen2" src="imagenes/imagen2.jpg" alt="imagen 2"></li>
				<li><img id="imagen3" src="imagenes/imagen3.png" alt="imagen 3"></li>
				<li><img id="imagen4" src="imagenes/imagen4.jpg" alt="imagen 4"></li>
				<li><img id="imagen5" src="imagenes/imagen5.jpg" alt="imagen 5"></li>
				<li><img src="imagenes/imagen6.jpg" alt="imagen 6"></li>
				<li><img src="imagenes/imagen7.jpg" alt="imagen 7"></li>
				<li><img src="imagenes/imagen8.jpg" alt="imagen 8"></li>
				<li><img src="imagenes/imagen9.jpg" alt="imagen 9"></li>
                            </ul>
					
                        </div>
                    </div> 
                </div> 
                    <br>
            </div>
<!-- Segona part codi html estandar -->            
            <div id="footer">
                
                <?php include 'footer.php'; ?> 
            </div>
        
        </div>
    
    </body>

</html>
