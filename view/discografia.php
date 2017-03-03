<?php ?>
<a name="TemplateInfo"></a>
<h2 id="nombreCdActual">Discos</h2>

<div id="portadas" class="borde">
    <!--    <div id="cdActual" class="borde">
            <img src="../media/pictures/portadasCd/pedacitosDelAlma.jpg"/>
        </div>-->
    <table id="listaCds" class="borde">
        <tr >
            <td id="0">
                <img src="../media/pictures/portadasCd/pedacitosDelAlma.jpg" />
                <h6>Pedacitos del Alma</h6>
            </td>
            <td id="1">
                <img src="../media/pictures/portadasCd/suennosGuardados.png"/>
                <h6>Sue&ntilde;os Guardados</h6>
            </td>
            <td id="2">
                <img src="../media/pictures/portadasCd/voces.jpg"/>
                <h6>Voces</h6>
            </td>
            <td  id="3">
                <img src="../media/pictures/portadasCd/cosasDelAlma.jpg"/>
                <h6>Cosas del alma</h6>
            </td>
        </tr>
    </table>
</div>



<div id="divLista"></div>


<script type="text/javascript">
    $(function() {
        $("#listaCds td").click(function(e) {
            e.preventDefault();
            cd = $(this).attr("id");
            seleccionarCd(cd);
        })

        urlCd = ["../media/music/pedacitosDelAlma/", "../media/music/suenosguardados/", "../media/music/voces/", "../media/music/cosasDelAlma/"];
        urlPortada = ["../media/pictures/portadasCd/pedacitosDelAlma.jpg", "../media/pictures/portadasCd/suennosGuardados.png",
            "../media/pictures/portadasCd/voces.jpg", "../media/pictures/portadasCd/cosasDelAlma.jpg"];
        nombreCd = ["Pedacitos del Alma", "Sueños Guardados", "Voces", "Cosas del Alma"];
        urlCdActual = "";

        function seleccionarCd(cd) {
            $("#divLista").fadeOut(0);
            urlCdActual = urlCd[cd];
            $("#cdActual,#nombreCdActual").fadeOut(function() {
                $("#cdActual").html("<img src=\"" + urlPortada[cd] + "\"/>").fadeIn();
                $("#nombreCdActual").html(nombreCd[cd]).fadeIn();
            })
            $("#divLista").load(urlCdActual + "listaCanciones.php").fadeIn();
        }

    })


</script>
