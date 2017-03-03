<?php ?>
<!--imagenes de 1100 X 650-->
<div id="myCarousel" class="carousel slide"  >
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item "><img class="imgCarousel" src="../media/pictures/galeria/15.jpg" /></div>
        <?php
//        para leer todas las imagenes de la carpeta: galeria
        $dir = '../media/pictures/galeria/';  //nombre de la carpeta
        $images = glob("$dir{*.gif,*.jpg,*.png}", GLOB_BRACE);
        foreach ($images as $v)
            echo '<div class="item " ><img class="imgCarousel" src="' . $v . '" /></div>';
        ?>  
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>