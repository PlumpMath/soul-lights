$(document).ready(function() {//Dom listo
    init();
    cargarBienvenida();
    nombre = ($("#nombrePagina").text());
    $("li[name=" + nombre + "]").attr("id", "current");
});

function init() {
    $("li[name=" + "inicio" + "]").click(function(evento) {
        evento.preventDefault();
        seleccionarOpcionMenu("inicio")
        cargarBienvenida();
    })
    $("li[name=" + "biografia" + "]").click(function(evento) {
        evento.preventDefault();
        seleccionarOpcionMenu("biografia")
        cargarBiografia();
    })
    $("li[name=" + "galeria" + "]").click(function(evento) {
        evento.preventDefault();
        seleccionarOpcionMenu("galeria")
        cargarGaleria();
    })
    $("li[name=" + "discografia" + "]").click(function(evento) {
        evento.preventDefault();
        seleccionarOpcionMenu("discografia")
        cargarDiscografia();
    })
    $("li[name=" + "videos" + "]").click(function(evento) {
        evento.preventDefault();
        seleccionarOpcionMenu("videos")
        cargarVideos();
    })
    $("li[name=" + "acercaDe" + "]").click(function(evento) {
        evento.preventDefault();
        seleccionarOpcionMenu("videos")
        cargarVideos();
    })
}

function seleccionarOpcionMenu(opcion) {
    $("#nav li").removeAttr("id");//Limpiar la seleccion en el menu
    $("li[name=" + opcion + "]").attr("id", "current");
}
sideBarHidden = false;
function hideSidebar() {
    if (!sideBarHidden) {
        $("#content-wrap").css("background","none");//ocultar separador
        $("#sidebar").fadeToggle(0);
        $("#main").attr("style", "width : 100%");
        sideBarHidden = true;

    }
}
function showSideBar() {
    if (sideBarHidden) {
        $("#content-wrap").css("background","");//mostrar separador
        $("#sidebar").fadeToggle(0);
        $("#main").attr("style", "");
        sideBarHidden = false;
    }
}

function cargarBienvenida() {
    showSideBar();
    $("#main").fadeToggle(10);
    $("#main").load("../view/bienvenida.php").fadeToggle(300);//cargar un segmento de la pagina
}

function cargarBiografia() {
    showSideBar();
    $("#main").fadeToggle(10);
    $("#main").load("../view/biografia.php").fadeToggle(300);
}
function cargarGaleria() {
    hideSidebar();
    $("#main").fadeToggle(10);
    $("#main").load("../view/galeria.php").fadeToggle(300);
}
function cargarDiscografia() {
    showSideBar();
    $("#main").fadeToggle(10);
    $("#main").load("../view/discografia.php").fadeToggle(300);
}
function cargarVideos() {
    showSideBar();
    $("#main").fadeToggle(10);
    $("#main").load("../view/videos.php").fadeToggle(300);
}

