<?php include_once '../controller/funciones.php'; ?>

<?php
$dir = '../media/video/'; //nombre de la carpeta de los videos
$videos = glob("$dir{*.mp4}", GLOB_BRACE); // los videos tienen ke ser .mp4(AVC H264) o .ogg
$cantVideos = sizeof($videos);
?>

<table style="width: 100%; ">
    <?php
    for ($i = 0; $i < $cantVideos; $i++) { // se construye la tabla con los snapshots de los clips
        if ($i % 2 == 0)
            echo '<tr>';
        $a = explode("/", $videos[$i]);
        $b = $a[sizeof($a) - 1];
        $nombreClip = explode(".", $b);
        $nombreClip = $nombreClip[0];
        echo "
            <td style=\"width:50%\">
                <div id = \"div_img_$i\">
                    <img style=\"margin-left:10%;margin-top:10%\" src = \"../media/video/videoplayerBack.png\" role = \"button\" class = \"btn\" data-toggle = \"modal\" href =\"#modal$i\"/>
                    <h6 style=\"text-align: center\" ><a data-toggle = \"modal\" href =\"#modal$i\">" . htmlentities($nombreClip) . "</a></h6>
                </div>
            </td>
        ";
        if ($i + 1 % 3 == 0)
            echo '</tr>';
    }
    ?>
</table>


<!--modals-->
<?php
for ($i = 0; $i < $cantVideos; $i++) {
    $a = explode("/", $videos[$i]);
    $b = $a[sizeof($a) - 1];
    $nombreClip = explode(".", $b);
    $nombreClip = $nombreClip[0];
    echo "
        <div id = \"modal$i\" class = \"modal hide fade\" tabindex = \"-1\" role = \"dialog\" aria-labelledby = \"myModalLabel\" aria-hidden = \"true\">
        <button style = \"right: 2%;position: relative\" type = \"button\" class = \"close\" data-dismiss = \"modal\" aria-hidden = \"true\">×</button>
            <video preload = \"auto\" id = \"video$i\" class = \"videoPlayer\" src = \"" . htmlentities($videos[$i]) . "\" controls>
            Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </div>
    ";
}
?>

<div id="a" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <button style="right: 2%;position: relative" type="button" class="close" data-dismiss="modal" aria-hidden="true">×
    </button>
    <video preload="auto" id="videoPlayera" class="videoPlayer" src="../media/video/a.mp4" controls>
        Tu navegador no implementa el elemento <code>video</code>.
    </video>
</div>
<!--scripts-->
<?php
echo '<script type = "text/javascript">';
for ($i = 0; $i < $cantVideos; $i++) {
    $a = explode("/", $videos[$i]);
    $b = $a[sizeof($a) - 1];
    $nombreClip = explode(".", $b);
    $nombreClip = $nombreClip[0];
    print"
    playing = false;//booleano ke guarda el estado de audioPlayer antes de reproducir el video
    $('#modal$i').on('hidden', function() {//Evento lanzado al cerrarse el modal
        $(\"#video$i\")[0].pause();//Pausar la reproduccion del video
        if (playing)//si habia audio reproduciendose continua al cerrar el video
            $(\"#audioPlayer\")[0].play();
    })
    $('#modal$i').on('shown', function() {//Evento lanzado al abrirse el modal
        playing = !$(\"#audioPlayer\")[0].paused;//guardar estado de audioPlayer
        if (playing)
            $(\"#audioPlayer\")[0].pause();
        $(\"#video$i\")[0].play();
    })
     ";
}
echo '</script>';
?>



<!--codigo html-->
<!--    playing = false;
    $('#a').on('hidden', function() {
        $("#videoPlayera")[0].pause();
        if (playing)//si habia audio reproduciendose continua al cerrar el video
            $("#audioPlayer")[0].play();
    })
    $('#a').on('shown', function() {
        playing = !$("#audioPlayer")[0].paused;
        if (playing)
            $("#audioPlayer")[0].pause();
        $("#videoPlayera")[0].play();
    })-->

