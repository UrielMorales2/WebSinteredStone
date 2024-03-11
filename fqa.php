<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fqa.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="icon" type="image/PNG" href="img/logo_home_ssm.svg">
    
    <script src="https://kit.fontawesome.com/cedfbf939d.js" crossorigin="anonymous"></script>
    <title>FQA | Sintered Stone</title>
</head>
<body >
<?php
        include "headerG.php";
?>
<?php
        include "header.php";
?>
    
    
	<main>
		<h1 class="titulo">Preguntas Frecuentes</h1>
		<!-- <div class="categorias" id="categorias">
			<div class="categoria activa" data-categoria="metodos-pago">
				<svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.19 7h2.81v15h-21v-5h-2.81v-15h21v5zm1.81 1h-19v13h19v-13zm-9.5 1c3.036 0 5.5 2.464 5.5 5.5s-2.464 5.5-5.5 5.5-5.5-2.464-5.5-5.5 2.464-5.5 5.5-5.5zm0 1c2.484 0 4.5 2.016 4.5 4.5s-2.016 4.5-4.5 4.5-4.5-2.016-4.5-4.5 2.016-4.5 4.5-4.5zm.5 8h-1v-.804c-.767-.16-1.478-.689-1.478-1.704h1.022c0 .591.326.886.978.886.817 0 1.327-.915-.167-1.439-.768-.27-1.68-.676-1.68-1.693 0-.796.573-1.297 1.325-1.448v-.798h1v.806c.704.161 1.313.673 1.313 1.598h-1.018c0-.788-.727-.776-.815-.776-.55 0-.787.291-.787.622 0 .247.134.497.957.768 1.056.344 1.663.845 1.663 1.746 0 .651-.376 1.288-1.313 1.448v.788zm6.19-11v-4h-19v13h1.81v-9h17.19z"/></svg>
				<p>Métodos de pago</p>
			</div>
			<div class="categoria" data-categoria="entregas">
				<svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M7 24h-5v-9h5v1.735c.638-.198 1.322-.495 1.765-.689.642-.28 1.259-.417 1.887-.417 1.214 0 2.205.499 4.303 1.205.64.214 1.076.716 1.175 1.306 1.124-.863 2.92-2.257 2.937-2.27.357-.284.773-.434 1.2-.434.952 0 1.751.763 1.751 1.708 0 .49-.219.977-.627 1.356-1.378 1.28-2.445 2.233-3.387 3.074-.56.501-1.066.952-1.548 1.393-.749.687-1.518 1.006-2.421 1.006-.405 0-.832-.065-1.308-.2-2.773-.783-4.484-1.036-5.727-1.105v1.332zm-1-8h-3v7h3v-7zm1 5.664c2.092.118 4.405.696 5.999 1.147.817.231 1.761.354 2.782-.581 1.279-1.172 2.722-2.413 4.929-4.463.824-.765-.178-1.783-1.022-1.113 0 0-2.961 2.299-3.689 2.843-.379.285-.695.519-1.148.519-.107 0-.223-.013-.349-.042-.655-.151-1.883-.425-2.755-.701-.575-.183-.371-.993.268-.858.447.093 1.594.35 2.201.52 1.017.281 1.276-.867.422-1.152-.562-.19-.537-.198-1.889-.665-1.301-.451-2.214-.753-3.585-.156-.639.278-1.432.616-2.164.814v3.888zm3.79-19.913l3.21-1.751 7 3.86v7.677l-7 3.735-7-3.735v-7.719l3.784-2.064.002-.005.004.002zm2.71 6.015l-5.5-2.864v6.035l5.5 2.935v-6.106zm1 .001v6.105l5.5-2.935v-6l-5.5 2.83zm1.77-2.035l-5.47-2.848-2.202 1.202 5.404 2.813 2.268-1.167zm-4.412-3.425l5.501 2.864 2.042-1.051-5.404-2.979-2.139 1.166z"/></svg>
				<p>Entregas</p>
			</div>
			<div class="categoria" data-categoria="seguridad">
				<svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z"/></svg>
				<p>Seguridad</p>
			</div>
			<div class="categoria" data-categoria="cuenta">
				<svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M9.484 15.696l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm10.516 11.304h-8v1h8v-1zm0-5h-8v1h8v-1zm0-5h-8v1h8v-1zm4-5h-24v20h24v-20zm-1 19h-22v-18h22v18z"/></svg>
				<p>Cuenta</p>
			</div>
		</div> -->

		<div class="preguntas">

			<!-- Preguntas Metodos de pago -->
			<div class="contenedor-preguntas activo" data-categoria="metodos-pago">
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Dónde estamos ubicados? <img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Tenemos presencia en 5 estados de la república mexicana, Oaxaca, Puebla, Guadalajara, Monterrey y Quintana Roo, en cada uno de ellos encontrarás la atención personalizada para llevar a cabo los proyectos de construcción o renovación de tus espacios
						La ubicación de nuestro Showroom y matriz se encuentra en; Carretera Tepeaca a Tecali, kilómetro 4.5, San Luis Ajajalpan, Puebla.​
					</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Quiénes somos?<img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Somos el mayor distribuidor de Piedra Tecnológica o Losa Sinterizada de México, un material novedoso que cuenta con una gran calidad, una resistencia sin igual a múltiples elementos tales como altas temperaturas, rayaduras, golpes, puede ser usado en exteriores sin sufrir las inclemencias del clima e incluso es resistente al fuego.
						Nuestro producto es una importación ya que la tecnología que la hace posible aún no ah llegado a nuestro país, esto nos hace pioneros en la distribución y comercialización de este material.
					</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Qué es “Losa Sinterizada”?<img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">
											La “Losa Sinterizada” o “Piedra Tecnológica” es un recubrimiento hecho con alta tecnología, haciendo uso principalmente de tres elementos: Granito, Cuarzo y Feldspard. Estos componentes proporcionan al producto una combinación única de firmeza y flexibilidad.
						Además, se incorporan derivados del Vidrio y del Cuarzo para asegurar la estabilidad de las losas de Piedra Tecnológica o Piedra Sinterizada.
						Un aspecto destacado de este material es la presencia de óxidos naturales que permiten la personalización de colores.
						La sinterización: Es un proceso en el que una selección de minerales naturales son triturados para después fundirse y comprimirse logrando así la resistencia y durabilidad que caracteriza a nuestro material y le hace único.
						Nuestros productos tienen la ventaja de poseer “secuencia facial”, es decir poseen un patrón o diseño que continua a través de las distintas losas que componen el modelo.
						Debido a su naturaleza nuestras losas pueden ser aplicadas en muebles de cocina, centros de entretenimiento, closets, mesas, fachadas, en espacios interiores o exteriores y mucho más.
						También nuestros productos tienen la distinción de estar en Ultra Gran Formato que van desde 2600*1200mm hasta los 3600*1600mm, en grosores de 6mm, 9mm y 12mm.
					</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Qué tipo de mantenimiento necesita? <img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Nuestra “piedra”, es el material de acabado de construcción y decorativo más completo del mercado, una vez montado muy difícilmente se deteriorará, es resistente a rasgaduras, corrosión, altas temperaturas, manchas y mucho más, literalmente te olvidas del mantenimiento.
						Nuestros productos te permitirán hacer elementos decorativos en tu construcción y su belleza hará que sean el centro de atención en tu casa, edificio, oficina, hotel, plaza comercial, entre otros.
					</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">​¿Qué ventajas ofrece nuestro producto sobre “piedras naturales” o “porcelanatos” ?:<img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Nuestras Losas Sinterizadas son resistentes a la abrasión, a distintos químicos y también a productos de limpieza, debido a su naturaleza ultra compacta casi no posee porosidad, lo que evita que se manche con líquidos y la hace ideal para poder usarse en lugares que tengan un alto contacto con alimentos, aunado a eso posee una gran resistencia a altas temperaturas y al fuego.
						A diferencia de las piedras naturales nuestras losas siguen el mismo patrón que mostramos en nuestros catálogos, ya que la tecnología que se usa para elaborar nuestros productos asegura una precisión y replica exacta de cada modelo.
					</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Tiene costo el envío?<img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Nosotros no incluimos como tal el servicio de envío, sin embargo, con todo gusto le podemos referir fletes con precios competentes, ya capacitados y con experiencia en mover este tipo de materiales.
					</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">​¿Cómo se instala?<img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">El proceso de instalación si es en pisos o muros, es exactamente igual al de una losa o un porcelanato de gran formato, tomando el cuidado de usar pegamento para “gran formato” si es para cubiertas, cocinas, barras, muebles…etc., se recomienda el uso de resina epóxica y de preferencia, especialmente en los formatos más delgados montar sobre una base de concreto, triplay o MDF para reafirmar el trabajo.
					</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">​¿Ofrecemos corte en la piedra tecnológica?<img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Inicialmente nacimos como una empresa dedicada a vender la piedra en gran formato, sin embargo, al ser pioneros en la venta y manipulación del material, nos dimos cuenta de las necesidades de nuestros clientes y el mercado, por lo que nos dimos a la tarea de aprender, las mejores formas para su tratamiento y hoy por hoy, podemos decir que somos expertos en su manejo, por lo que te podemos con mucho gusto, profesionalismo y calidad, ofrecer el corte, colocación y también podemos apoyar en la realización de un proyecto completo de tu espacio de acuerdo a tus gustos y necesidades.
					</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Podemos hacer entrega inmediata?<img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Contamos con más de 100 modelos para entrega inmediata y un stock suficiente en la mayoría de nuestros modelos exhibidos o en catálogo.</p>
				</div>

			<!-- Preguntas Entregas -->
			<div class="contenedor-preguntas" data-categoria="entregas">
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Tienen entregas a domicilio? <img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿En cuanto sale el envio a mi país? <img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.</p>
				</div>
			</div>

			<!-- Preguntas Seguridad -->
			<div class="contenedor-preguntas" data-categoria="seguridad">
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Como puedo saber si son confiables? <img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Que pasa con mis datos personales? <img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.</p>
				</div>
			</div>

			<!-- Preguntas Cuenta -->
			<div class="contenedor-preguntas" data-categoria="cuenta">
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Como puedo acceder a mis pedidos? <img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.</p>
				</div>
				<div class="contenedor-pregunta">
					<p class="pregunta">¿Como puedo cambiar mi contraseña? <img src="./img/img/suma.svg" alt="Abrir Respuesta" /></p>
					<p class="respuesta">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.adipisicing elit. Voluptatum laborum porro voluptates, sequi aliquam mollitia! Nostrum eius iure sapiente, voluptates soluta adipisci, perferendis voluptatibus eligendi vel saepe harum. Consectetur, doloribus.</p>
				</div>
			</div>




		</div>
	</main>

	<script src="js/categorias.js"></script>
	<script src="js/preguntasFrecuentes.js"></script>


<?php
        include "footer.php";
?>
</body>
</html>

