<?php

function cargarCss() {
    print'
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="../images/style.css" type="text/css" />
        <link rel="stylesheet" href="../css/misEstilos.css" type="text/css" />
        ';
}

function cargarJs() {
    print'
    <script src="../bootstrap/js/jquery.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="../js/funciones.js" type="text/javascript"></script>
    ';
}

function cargarMenu() {
    print'
    <div  id="nav">
        <ul class="nav nav-pills">
            <li name="inicio" ><a href="">Inicio</a></li>
            <li name="biografia" ><a href="">Bio</a></li>
            <li name="galeria" ><a href=""><em>Galer&iacute;a</em></a></li>
            <li name="discografia"><a href="">Discograf&iacute;a</a></li>
            <li name="videos"><a href="">Videos</a></li>
            <li name="acercaDe"><a href="">Acerca de</a></li>
        </ul>

    </div>	
    ';
}

//repruductor de audio:
function cargarCancionAleatoria() {
    $dir = '../media/music/suenosguardados/';  //nombre de la carpeta
    $canciones = glob("$dir{*.mp3}", GLOB_BRACE);
    $cantCanciones = sizeof($canciones);
    $indice = rand(0, $cantCanciones - 1);
    print "\"$canciones[$indice]\"";
}


//reproductor de video
function cargarVideos() {
    $dir = '../media/video/';  //nombre de la carpeta
    $videos = glob("$dir{*.mp4}", GLOB_BRACE);
    print "\"$videos[0]\"";
}
?>


