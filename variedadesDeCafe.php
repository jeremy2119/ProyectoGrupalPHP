<?php include("header.php"); ?>

<style>
#seccionVariedadesCafe {
            width: 100%;
            margin: 0 auto;
        }

        .right_vc,
        .left_vc {
            width: 1.6em;
            display: inline-block;
            cursor: pointer;
        }

        #titulo_vc {
            display: inline;
            padding: 0 1em;
        }

        #titulo_div {
            text-align: center;
        }

        #texto_vc {
            text-align: justify;
            padding-top: 1em;
        }

        #titulo_principal {
            cursor: pointer;
        }





</style>
    <main>
        <!--Cover
            Se pone el titulo de la seccion correspondiente-->

        <section class="cover">
            <p class="tituloprincipal" id="titulo_principal">Variedades de Café</p>
        </section>

        <section class="sec100" id="seccionVariedadesCafe">

            <!-- Muestra el titulo y las dos flechas de avance/retroceso -->
            <div id="titulo_div">
                <img id="left_vc" src="assets/left.png" class="left_vc" title="Pincha para ver más variedades">
                <h3 id="titulo_vc"></h3>
                <img id="right_vc" src="assets/right.png" class="right_vc" title="Pincha para ver más variedades">
            </div>

            <!-- Inserta el texto  -->
            <div id="texto_vc"></div>

            <!-- Inserta la image -->
            <img id="imagen_vc" src="" class="imagen">

        </section>
    </main>

<script>

    //carrusel de objetos a mostrar: TITULO, IMAGEN y TEXTO
    var carrusel_vc = [{
        'titulo': 'ARÁBICA',
        'imagen': 'assets/arabica.jpg',
        'texto': `Es el tipo de grano que conquista hasta casi un 80% de la producción mundial, sin duda el rey de las
                    tazas de café. Procedente del sur de Etiopía, en los primeros años de su cultivo únicamente se
                    aprovechaban sus hojas para preparar té. Su sabor es suave y agradable al paladar, que recuerda en
                    ocasiones a aromas silvestres y frutos secos. El café Arábica se considera de tipo gourmet.`
    },
    {
        'titulo': 'ROBUSTA',
        'imagen': 'assets/robusta.jpg',
        'texto': `Se trata de un grano de café procedente de un arbusto mucho más resistente en comparación con el
                    anterior, por lo que es posible cultivarlo en una mayor variedad de terrenos.
                    La concentración de cafeína en el grano supera bastante a la del café Arábica, siendo ésta de un 2-3%
                    aproximadamente, en un grano considerablemente más pequeño.`
    },
    {
        'titulo': 'LIBÉRICA',
        'imagen': 'assets/liberica.jpg',
        'texto': `Procedente de los alrededores de Monrovia, en Liberia, se trata de un grano de café que proporciona un
                    sabor particularmente diferente, por lo que su consumo no está muy extendido. No obstante, es un tipo
                    de grano que es muy apreciado en países escandinavos.`
    },
    {
        'titulo': 'EXCELSA',
        'imagen': 'assets/excelsa.jpg',
        'texto': `Fue descubierto por primera vez en el lago Chad, en África. A pesar de ser muy similar al café Libérica
                    en el tamaño del árbol y sus hojas, difiere en que sus flores, frutos y granos son más pequeños, así
                    como de una calidad inferior. Tanto este tipo de grano como el anterior tienen realmente un consumo
                    residual.`
    }
    ];

    var carrusel_idx_vc = 0; //inicie el indice del carrusel en cero
    update_vc(0); //muestre la primera diapositiva

    //asigna evento click al botón hacia la derecha
    //avanza el carrusel 
    $('#right_vc').click(function () {
        carrusel_move_vc('right');
    });

    //asigna evento click al botón hacia la izquierda
    //retrocede el carrusel 
    $('#left_vc').click(function () {
        carrusel_move_vc('left');
    });

    //asigna evento click al botón hacia abajo
    //nueve el foco a la sección de variedades de cafe al hacer click a la imagen: \/
    $('#titulo_principal').click(function () {
        moveToId('seccionVariedadesCafe');
    });

    function carrusel_move_vc(dir) {

        if (dir == 'right') { //avanza a la derecha

            $('#right_vc').animate({ 'width': '2em' }, 'slow'); //hace mas grande la flecha
            $('#right_vc').animate({ 'width': '1.6em' }, 'slow');//la vuelve a su tama/o original lentamente

            if (carrusel_idx_vc + 1 == carrusel_vc.length)
                carrusel_idx_vc = 0; //si llegó al final entonces vaya al principio
            else
                carrusel_idx_vc++; //de otra manera avanza a la próxima diapositiva
        }
        else { // 'left' si no retrocede a la izquierda

            $('#left_vc').animate({ 'width': '2em' }, 'slow'); //hace mas grande la flecha
            $('#left_vc').animate({ 'width': '1.6em' }, 'slow');//la vuelve a su tama/o original lentamente

            if (carrusel_idx_vc == 0)//si llegó al inicio entonces salte al último
                carrusel_idx_vc = carrusel_vc.length - 1;
            else//si no retrocede a la próxima diapositiva
                carrusel_idx_vc--;
        };

        //agrega animacion al texto y la imagen
        $('#texto_vc').slideUp(1000, function () { //sube el texto hasta desaparecer
            $('#imagen_vc').fadeOut(1000, function () { // al terminar de subir el texto empieza a desvancer la imagen
                update_vc(carrusel_idx_vc); //actualiza los datos a mostrar en la pantalla 
                $('#titulo_vc').css('letter-spacing', '5px'); //agrega animacion al titulo
                $('#titulo_vc').animate({ 'letter-spacing': '0.1px' }, 'slow');
                $('#imagen_vc').fadeIn(1000, function () { //muestra de nuevo la imagen
                    $('#texto_vc').slideDown(1000); //muestra de nuevo el texto
                });
            });

        });
    };

    // enfoca en la pantalla el Id pasado como parametro
    function moveToId(id) {
        $('html, body').animate({
            scrollTop: $("#" + id).offset().top-25
        }, 2000);
    }

    //actualiza los datos a mostrar en la pantalla
    function update_vc(idx) {
        $('#titulo_vc').html(carrusel_vc[idx].titulo);
        $('#imagen_vc').attr('src', carrusel_vc[idx].imagen);
        $('#texto_vc').html(carrusel_vc[idx].texto);
    }
</script>
<?php include("footer.php"); ?>