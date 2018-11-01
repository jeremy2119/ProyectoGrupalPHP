<?php include("header.php"); ?>
    <main>

        <!--Cover

            Se pone el titulo de la seccion correspondiente-->

        <section class="cover" id="coverinicio">
            <div class="tituloprincipal" id="tinicio">Café Au Lait

                <p id="descrip">Lo mejor del café en un solo lugar</p>
                <img src="assets/down.png" id="down"></div>

        </section>

        <!--Sec100

            -Solo se debe colocar a un section la clase "sec100"
            -A las imagenes se debe colocar la clase "imagen" y debe tener una relacion de aspecto 4:3
            -->


        <section class="sec100" id="sobrenosotros">
            <h1>Sobre Nosotros</h1>
            <br>
            <p id="firstchild">
                Café Au Lait nació de la idea de ofrecer el mejor café y las mejores crepas de la capital, en un ambiente cálido y comodo con un servicio de primera. En 2018, un grupo de amigos, en una reunión, tuvieron la idea de abrir una cafetería en un edificio historico de San José donde pudieran dar productos de gran calidad a un precio accesible, pensando en una población jóven de la ciudad.
            </p>
            <br>
            <br>
            <p id="secondchild">
                Nuestro principal objetivo es hacer de su visita una experiencia única, ofreciendole la mayor calidad en nuestras bebidas y platillos. Amamos lo que hacemos y lo reflejamos en como elaboramos nuestros productos, eso es lo que nos diferencia de las demás cafeterías.
            </p>

        </section>



        <!--sec50prin

            -Los div con la clase "sec50", deben ir dentro de un section la clase "sec50prin
            -A las imagenes se debe colocar la clase "imagen" y debe tener una relacion de aspecto 4:3-->

        <section class="sec100" id="nuestrocafe">
            <h1>Nuestro café</h1>
            <br>
            <p>
                Usamos diferentes tipos de café, cada uno de un sector distinto del país. La excelencia del café de Costa Rica puede disfrutarse de ocho formas distintas, pues son ocho las zonas productoras de café, cuyas características especiales son famosas en todo el mundo. Por lo privilegiado de su clima, este país puede producir diversidad para satisfacer todos los gustos.
            </p>

            <br>
            <br>
            <p id="materiaprima">
                La materia prima de cada una de nuestras tazas de café proviene lugares como Turrialba, Orosi, Guanacaste, Tres Ríos, sector Brunca, Tarrazú, San Ramón y algunos lugares del Valle Central.
            </p>

        </section>


        <!--sec33prin
            
            -Los div con la clase "sec33", deben ir dentro de un section la clase "sec33prin
            -A las imagenes se debe colocar la clase "imagen" y deben tener una relacion de aspecto 4:3-->


        <section class="sec50prin" id="mapa">
            <div class="sec50" id="deu">
                <h2 id="titledeu">¿Dónde estamos ubicados?</h2>
                <br>
                <p id="pdeu">Nuestra cafetería está ubicada en el Edificio Maroy, 150 metros norte de la Plaza de la cultura, entre Calle 5 y Avenida 1, esquina noreste, San José</p>

            </div>
            <div class="sec50">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15719.967155494644!2d-84.0762274!3d9.9346406!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x369237ccf2c44f99!2sEdificio+Maroy!5e0!3m2!1ses!2scr!4v1536178299756" width="100%" height="300vh" frameborder="0" style="border:0" id="googlemaps" allowfullscreen></iframe>
            </div>

        </section>
        <section class="sec50prin" id="linkreserva">
            <div class="sec50">
                <img src="assets/cafeteria.jpg" class="imagen" id="imgcafeteria">
            </div>
            <div class="sec50">
                <h2 id="treserva">¿Quieres reservar un lugar en la cafetería?</h2>
                <button class="button" onclick="location.href='contacto.html'">Hacer una reserva</button>
            </div>
        </section>
        <section class="sec50prin" id="secredes">
            <div class="sec50" id="tredes">
                <h1>¡Síguenos en nuestras redes!</h1>
            </div>
            <br>
            <div class="sec50" id="bredes">
                <br>
                <button class="button redes" onclick="location.href='" style="background-color: royalblue;border: 0px"><img src="assets/facebook.png">Facebook</button>
                <button class="button redes" onclick="location.href=''" style="background-color: cornflowerblue; border: 0px"><img src="assets/twitter.png">Twitter</button>
                <button class="button redes" onclick="location.href=''" style="background-image: url(assets/bginstagram.jpg);  background-size:cover; border: 0px; background-position: center;"><img src="assets/instagram.png">Instagram</button>
            </div>

            <br>
        </section>
    </main>
  <?php include("footer.php"); ?>