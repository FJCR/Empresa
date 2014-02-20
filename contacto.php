<!DOCTYPE html>
<html>
    <head>
        <title>M&Oacute;N VIRTUAL</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="estilo.css" type="text/css" rel="stylesheet">
        <link rel="shortcut icon" href="http://1.bp.blogspot.com/-Mf8hFXlGuTM/T4LfH_22EtI/AAAAAAAAABA/AnqiyDjHjEY/s1600/informatica1.jpg"/>
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
                    AFICIONS <input type="checkbox" name="f4"> tv <input type="checkbox" name="f4"> musica <input type="checkbox" name="f4"> <label>aficions</label><br>
                    <br>
                    SEXE <input type="radio" name="f5"> dona <input type="radio" name="f5"> <label>home</label><br>
                    <br>
                    CONTRASENYA <input type="password" name="f6">
                    <br>
                    CARREGAR ARXIU <input type="file" name="f7">
                    <br>
                    <label>QUE SISTEMA USA HABITUALMENTE</label>
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
                <div id="divtabla">
                    <table>
                        <tr>
                            <th>nom</th>
                            <th>cognoms</th>
                            <th>correu</th>
                        </tr>
                        <tr>
                            <td>joan</td>
                            <td>galmes</td>
                            <!-- INSEREIX FILA DE DADES -->
                            <td><a href="mailto:joangalmes@esliceu.com">joangalmes@esliceu.com</a></td>
                            <!-- INSEREIX FILA AMB HIPERENLLAÇ -->
                        </tr>
                        <tr>
                            <td>pep</td>
                            <td>buades</td>
                            <td><a href="mailto:pepbuades@esliceu.com">pepbuades@esliceu.com</a></td>
                        </tr>
                    </table>
                </div>
<!-- Segona part codi html estandar -->
            <div id="footer">
                <?php include 'footer.php'; ?> 
            </div>
            </div>
        </div>
    </body>
</html>
