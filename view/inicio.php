<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include_once '../controller/funciones.php'; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <title>B&aacute;rbara Mili&aacute;n</title>
        <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
        <meta name="author" content="B&aacute;rbara Mili&aacute;n" />
        <meta name="description" content="Luces del Alma" />
        <meta name="keywords" content="m&uacute;sica, luz,luces,amalia,B&aacute;rbara Mili&aacute;n,B&aacute;rbara,Mili&aacute;n" />
        <meta name="robots" content="index, follow, noarchive" />
        <meta name="googlebot" content="noarchive" />
        <?php cargarCss(); ?>
    </head>
    <body>
        <label id="nombrePagina" class="hide">inicio</label>
        <!-- wrap starts here -->
        <div id="wrap">
            <!--header -->
            <div id="header">			
                <?php cargarMenu() ?>
                <!--header ends-->	
            </div>
            <!-- content-wrap starts -->
            <div id="content-wrap">
                <div id="main" >
                    <!-- Aki van las paginas dinamicas -->
                </div>
                <!-- sidebar starts -->
                <div id="sidebar">			
                    <div class="playing">
                        <div class="player">
                            <audio id="audioPlayer" controls height="58" width="100%" > 
                                <source src=<?php cargarCancionAleatoria() ?> type="audio/mpeg"></source>
                                <embed height="50" width="100%"  src=""</embed>
                            </audio>
                        </div>
                        <marquee id="cancionActual" >Amalia - Sue&ntilde;os Guardados</marquee>
                        <img id="imgPortadaCd" src="../media/pictures/portadasCd/suennosGuardados.png"  alt="Portada de Cd" class="portadaSmall" />
                    </div>

                    <h3>Enlaces de inter&eacute;s</h3>
                    <ul class="sidemenu">
                        <li><a href="http://www.psdtuts.com/">PSDTuts</a></li>
                        <li><a href="http://www.alistapart.com">Alistapart</a></li>					
                        <li><a href="http://www.cssremix.com">CSS Remix</a></li>
                        <li><a href="http://www.cssmania.com/">CSS Mania</a></li>					
                    </ul>

                    <h3>Sponsors</h3>
                    <ul class="sidemenu">
                        <li><a href="http://themeforest.net?ref=ealigam">Jeff Stanger <br /><span>Su elecci&oacute;n para realizar grabaciones supremas</span></a></li>
                        <li><a href="http://www.4templates.com/?aff=ealigam">4templates <br /><span>Low Cost Hi-Quality Templates</span></a></li>
                        <li><a href="http://store.templatemonster.com?aff=ealigam">TemplateMonster <br /><span>Delivering the Best Templates on the Net!</span></a></li>
                        <li><a href="http://tinyurl.com/3cgv2m">Text Link Ads <br /><span>Monetized your website</span></a></li>
                        <li><a href="http://www.fotolia.com/partner/114283">Fotolia <br /><span>Free stock images or from $1</span></a> </li>
                        <li><a href="http://www.dreamstime.com/res338619">Dreamstime <br /><span>Lowest Price for High Quality Stock Photos</span></a></li>
                        <li><a href="http://www.dreamhost.com/r.cgi?287326">Dreamhost <br /><span>Premium webhosting</span></a></li>
                    </ul>

                    <h3>Fulish</h3>
                    <p>&quot;To be yourself in a world that is constantly trying to make you 
                        something else is the greatest accomplishment.&quot; </p>
                    <p class="align-right">- Ralph Waldo Emerson</p>

                    <!-- sidebar ends -->		
                </div>
                <!-- content-wrap ends-->	
            </div>

            <!-- footer starts here -->	
            <div id="footer">

                <div id="footer-left">
                    <p>
                        &copy; Todos los derechos reservados	&nbsp; 	
                        Dise&ntilde;ado por: <a href="nsarduy@estudiantes.uci.cu">Naty</a>	&nbsp; 

                        Valid: <a href="http://validator.w3.org/check/referer">XHTML</a> | 
                        <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>		
                    </p>	
                </div>

                <div id="footer-right">
                    <p class="align-right">
                        <a href="index.html">Inicio</a> 
                    </p>
                </div>

            </div>
            <!-- footer ends here -->

            <!-- wrap ends here -->
        </div>
    </body>
    <?php cargarJs() ?>
</html>
