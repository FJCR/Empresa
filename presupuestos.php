<!DOCTYPE html>
<html>
    <head>
        <title>M&Oacute;N VIRTUAL</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="estilo.css" type="text/css" rel="stylesheet">
        <link rel="shortcut icon" href="http://www.translatingcuba.com/images/rosa/1371387830_informatica.jpg"/>
    </head>
    <body>
        <div id="contenedor">
            <div id="header"><h1>M&Oacute;N VIRTUAL</h1></div>
            <div id="menu">
                <?php include 'menu.php'; ?>
            </div>
            
            <div id="cos">
<!-- Primera part codi html estandar -->                
                <div id="formulario">
                <form method="get" action="google.es">
                    <label id="f1">NOM</label>
                    <input type="text" name="f1">
                    COGNOM1<input type="text" name="f2">
                    <br>
                    COGNOM2<input type="text" name="f2">
                    <br>
                    COMENTARI<textarea name="f3"></textarea>
                    <br>
                    AFICIONS <input type="checkbox" name="f4"> TV <input type="checkbox" name="f4"> M&Uacute;SICA <input type="checkbox" name="f4"> <label>VIDEOJOCS</label><br>
                    <br>
                    SEXE <input type="radio" name="f5"> DONA <input type="radio" name="f5"> <label>HOME</label><br>
                    <br>
                    CONTRASENYA <input type="password" name="f6">
                    <br>
                    CARREGAR ARXIU <input type="file" name="f7">
                    <br>
                    <label>QUE SISTEMA UTILITZA HABITUALMENT</label>
                    <select name="c7">
                        <option value="val1">MAC</option>
                        <option value="val2">WINDOWS</option>
                        <option value="val3">LINUX</option>
                        <option value="val4">TOTS</option>
                    </select>
                    <br>
                    <input type="submit" value="enviar">
                    <br>
                    <input type="reset" name="c8" value="borrar">
                    <br>
                </form>
                </div>
            </div>
<!-- Segona part codi html estandar -->            
            <div id="footer">
                
                <?php include 'footer.php'; ?> 
            </div>
        
        </div>
    
    </body>

</html>
