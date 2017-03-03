<?php
include_once '../../../controller/funciones.php';

function getName($url) {
    $a = explode("/", $url);
    $a = $a[sizeof($a) - 1];
    $a = explode(".", $a);
    $a = $a[0];
    return $a;
}
?>
<table id="listaCanciones" class="table table-hover">
    <thead>
        <tr>
            <th style="width: 5%">#</th>
            <th style="width: 70%">Nombre</th>
            <th style="width: 15%">Duracion</th>
        </tr>
    </thead>
    <tbody id="tbodyCanciones">     
        <?php
        $dir = './';  //direcion de la carpeta
        $canciones = glob("$dir{*.mp3}", GLOB_BRACE);
        $cantCanciones = sizeof($canciones);
        for ($i = 0; $i < $cantCanciones; $i++) {
            $j = $i + 1;
            $nombre = getName($canciones[$i]);
            echo "
                <tr url=\"" . htmlentities($canciones[$i]) . "\" nombre=\"" . htmlentities($nombre) . "\">
                    <td style=\"width:10px\">
                        $j
                    </td>
                    <td>
                        " . htmlentities($nombre) . "
                    </td>
                    <td>
                        <i class=\"icon-play\"></i>
                    </td>
                </tr>
                ";
        }
        ?>
    </tbody>
</table >
<script type="text/javascript">
    $(function() {
        $("#listaCanciones tr").click(function(e) {
            e.preventDefault();
            nombreCancion = $(this).attr("nombre");
            urlNueva = $(this).attr("url");
            urlNueva = urlNueva.substring(2, urlNueva.length);
            urlNueva = urlCdActual + urlNueva;
            $("#audioPlayer")[0].pause();
            $("#audioPlayer")[0].src = urlNueva;
            $("#audioPlayer")[0].play();

            $("#cancionActual").html(nombreCd[cd] + " - " + nombreCancion);
            $("#imgPortadaCd").fadeOut(function() {
                $("#imgPortadaCd").attr("src", urlPortada[cd]).fadeIn();
            });
        });
    });
</script>
