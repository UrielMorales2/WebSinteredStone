<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugin/whatsapp-chat-support.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!-- <link rel="stylesheet" href="css/menupequeño.css"> -->
    <link rel="stylesheet" href="css/font.css">
    <link rel="icon" type="image/PNG" href="img/logo_home_ssm.svg">
    <script src="https://kit.fontawesome.com/cedfbf939d.js" crossorigin="anonymous"></script>
    <title>Sintered Stone</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/menuBueno.js"></script>
</head>
<body>
<?php
        include "headerG.php";
?>
<?php
        include "header.php";
?>
    
    <seccion class="bannerseccion">
        <div class="bannerContainer">
            <div class="texContainer">
                <h1 class="ttitleBanner">Nosotros te ayudamos a resaltar tus superficies</h1>
                <p class="textBanner">Nuestras Losas Sinterizadas hacen de cada espacio un
                    recuerdo inolvidable, ya que son una mezcla de diseño y
                    técnología.
                </p>
            </div>
            
                <img src="img/ARISTON_WHITE_LANDING_RENDER.png" alt="" class="imgbanner b1">
               
            
                <img src="img/ARISTON_WHITE_LANDING_PLACA.png" alt="" class="imgbanner b2">
            
        </div>
    </seccion>

    <section class="beneficios">
        <div class="beneficios_container">
            <div class="columna">
                <i class="fa-solid fa-truck-fast"></i>
                <div class="iconosBeneficios">

                </div>
                <div class="texto">Entregas rápidas y
                    sin complicaciones.
                </div>
            </div>
            <div class="columna">
                <i class="fa-solid fa-location-dot"></i>
                <div class="iconosBeneficios">
                </div>
                <div class="texto">Contamos con sucursales
                    en la republica mexicana.</div>
            </div>
            <div class="columna">
                <i class="fa-solid fa-boxes-stacked"></i>
                <div class="iconosBeneficios">
                </div>
                <div class="texto">Tenemos el Stock más
                    grande de México.</div>
            </div>
        </div>
    </section>

    <section class="Ventajas">
        <div class="ventajasContainer">
            <div class="columna_50 imgV">
                <img src="img/ventajas.png" alt="" class="imgventajas">
            </div>
            <div class="columna_50">
                <div class="titleVentajas">Ventajas de la Piedra
                    Sinterizada
                </div>
                <div class="textVentajas">La Piedra Sinterizada, también conocida como Piedra Tecnológica,
                    se compone de ingredientes naturales derivados principalmente
                    de tres elementos: Granito, Cuarzo y Feldspard. Estos
                    componentes proporcionan al producto una combinación
                    única de firmeza y flexibilidad.
                </div>
                <div class="iconVentajas">
                    <div class="columImg">
                        <img src="img/ICONO_BENEFICIOS-01.png" alt="" class="imgIconVentjas">
                        <div class="textoV">Facilidad de Limpieza
                            y Mantenimiento
                        </div>
                    </div>
                    <div class="columImg"><img src="img/ICONO_BENEFICIOS-02.png" alt="" class="imgIconVentjas">
                        <div class="textoV">Facilidad de Limpieza
                            y Mantenimiento
                        </div>
                    </div>
                    <div class="columImg"><img src="img/ICONO_BENEFICIOS-03.png" alt="" class="imgIconVentjas">
                        <div class="textoV">Resistente a
                            la Humedad
                        </div>
                    </div>
                    <div class="columImg"><img src="img/ICONO_BENEFICIOS-04.png" alt="" class="imgIconVentjas">
                        <div class="textoV">Resistente a Rayaduras
                        </div>
                    </div>
                    <div class="columImg"><img src="img/ICONO_BENEFICIOS-05.png" alt="" class="imgIconVentjas">
                        <div class="textoV">Resistente al Calor y
                            Altas Temperaturas
                        </div>
                    </div>
                    <div class="columImg"><img src="img/ICONO_BENEFICIOS-06.png" alt="" class="imgIconVentjas">
                        <div class="textoV">Resistente a
                            las manchas
                        </div>
                    </div>
                </div>
                <div class="masVentajas">
                    <a href="ventajas.php" class="linkMas">Conoce más</a>
                    <div class="masVentajasline"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenedor para el contenido dinámico -->
    <div id="contenido-dinamico"></div>









<?php
        include "footer.php";
?>
    <!-- Script de AJAX para cargar el contenido dinámico -->
    <script>
        function cargarContenido(url, contenedor) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(contenedor).innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", url, true);
            xhttp.send();
        }

        document.getElementById("enlace-nosotros").addEventListener("click", function(event) {
            event.preventDefault(); // Evita la recarga de la página al hacer clic en el enlace
            cargarContenido("nosotros.php", "contenido-dinamico"); // Carga el contenido de la página de nosotros
        });

        document.getElementById("enlace-contacto").addEventListener("click", function(event) {
            event.preventDefault(); // Evita la recarga de la página al hacer clic en el enlace
            cargarContenido("contacto.php", "contenido-dinamico"); // Carga el contenido de la página de contacto
        });
    </script>




    
<!-- <script src="js/carrusel.js"></script> -->
<!-- <script src="js/menu.js"></script> -->
<!-- jQuery 1.8+ -->
<!-- <script src="plugin/components/jQuery/jquery-1.11.3.min.js"></script> -->
<!-- Plugin JS file -->
<script src="plugin/components/moment/moment.min.js"></script>
<script src="plugin/components/moment/moment-timezone-with-data.min.js"></script> <!-- spanish language (es) -->
<script src="plugin/whatsapp-chat-support.js"></script>
<script>
$('#button-w').whatsappChatSupport({
    defaultMsg : '',
});
</script>

<script type="text/javascript">
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("abajo", window.scrollY>0);
    })
    window.addEventListener("scroll", function(){
        var header = document.querySelector(".infoHeader");
        header.classList.toggle("abajo", window.scrollY>0);
    })




    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("slide");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>

</body>
</html>