<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="assets/icons/codoacodo.ico" />

    <title>La conferencia</title>
</head>

<body>
    <!--Header-->
    <?php include_once("templates/header.php") ?>

    <!--Carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.nicolascalcagno.dev/nicolascalcagno/shared/conferencia-buenos-aires/images/general/ba1.webp" class="d-block w-100 welcome-image" alt="...">
                <div class="welcome-content">
                    <h1 class="mb-0">Conferencia</h1>
                    <h1>Buenos Aires</h1>
                    <p>Llega por primera vez a Argentina un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. ¡Te esperamos!</p>
                    <button type="button" class="btn btn-outline-light" onclick="window.location.href='#convierteteEnOrador'">Quiero ser orador</button>
                    <button type="button" class="btn btn-success bg-green btn-buy-tickets" onclick="window.location.href='tickets.php'">Comprar tickets</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.nicolascalcagno.dev/nicolascalcagno/shared/conferencia-buenos-aires/images/general/ba2.webp" class="d-block w-100 welcome-image" alt="...">
                <div class="welcome-content">
                    <h1 class="mb-0">Conferencia</h1>
                    <h1>Buenos Aires</h1>
                    <p>Llega por primera vez a Argentina un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. ¡Te esperamos!</p>
                    <button type="button" class="btn btn-outline-light" onclick="window.location.href='#convierteteEnOrador'">Quiero ser orador</button>
                    <button type="button" class="btn btn-success bg-green btn-buy-tickets" onclick="window.location.href='tickets.php'">Comprar tickets</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.nicolascalcagno.dev/nicolascalcagno/shared/conferencia-buenos-aires/images/general/ba3.webp" class="d-block w-100 welcome-image" alt="...">
                <div class="welcome-content">
                    <h1 class="mb-0">Conferencia</h1>
                    <h1>Buenos Aires</h1>
                    <p>Llega por primera vez a Argentina un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. ¡Te esperamos!</p>
                    <button type="button" class="btn btn-outline-light" onclick="window.location.href='#convierteteEnOrador'">Quiero ser orador</button>
                    <button type="button" class="btn btn-success bg-green btn-buy-tickets" onclick="window.location.href='tickets.php'">Comprar tickets</button>
                </div>
            </div>
        </div>
    </div>
    <!--FIN Carousel-->

    <!--Oradores-->
    <main class="mt-4" id="oradores">
        <div class="container">
            <p class="text-center mb-0">CONOCE A LOS</p>
            <h1 class="text-center">ORADORES</h1>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4 mb-md-0">
                    <div class="card h-100">
                        <img src="https://cdn.nicolascalcagno.dev/nicolascalcagno/shared/conferencia-buenos-aires/images/general/steve.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1">Steve Jobs</h5>
                            <span class="badge text-bg-warning">Javascript</span>
                            <span class="badge text-bg-info">React</span>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur doloribus facere id in laboriosam maxime non officia sed sunt voluptate, voluptatem. Accusamus cumque eaque fuga libero mollitia qui repellendus?</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mb-md-0">
                    <div class="card h-100">
                        <img src="https://cdn.nicolascalcagno.dev/nicolascalcagno/shared/conferencia-buenos-aires/images/general/bill.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1">Bill Gates</h5>
                            <span class="badge text-bg-warning">Javascript</span>
                            <span class="badge text-bg-info">React</span>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae labore dicta nulla possimus illum laborum, recusandae doloribus in, est facilis placeat. Ex, repellendus? Dolor asperiores molestias accusamus, impedit dignissimos ipsam.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://cdn.nicolascalcagno.dev/nicolascalcagno/shared/conferencia-buenos-aires/images/general/ada.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1">Ada Lovelace</h5>
                            <span class="badge text-bg-secondary">Negocios</span>
                            <span class="badge text-bg-danger">Startups</span>
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae labore dicta nulla possimus illum laborum, recusandae doloribus in, est facilis placeat. Ex, repellendus? Dolor asperiores molestias accusamus, impedit dignissimos ipsam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--FIN Oradores-->

    <!--Conoce mas-->
    <section class="row row-cols-1 row-cols-lg-2 g-0 mt-5" id="lugarYFecha">
        <img src="https://cdn.nicolascalcagno.dev/nicolascalcagno/shared/conferencia-buenos-aires/images/general/honolulu.webp" alt="">
        <div class="text-bg-dark overflow-hidden ps-4 pe-4 pt-4 pb-4">
            <h1 class="text-white">Buenos Aires OCTUBRE</h1>
            <p>
                Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados Unidos. Honolulu es la más sureña de entre las principales ciudad estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad condado consolidada que cubre toda la ciudad (aproximadamente 600km² de superficie). </p>
            <button type="button" class="btn btn-outline-light">Conocé más</button>
        </div>
    </section>

    <!--Conviertete en orador-->
    <section class="mt-4" id="convierteteEnOrador">
        <div class="container text-center">
            <form action="index.php">
                <p class="mb-0">CONVIERTETE EN</p>
                <h1>ORADOR</h1>
                <p>Anótate como orador para dar una <a href="#" data-bs-toggle="tooltip" data-bs-title="Es una presentación de la idea central de un proyecto o visión en 5 minutos" id="a-ignite">charla ignite</a>. ¡Cuéntanos de que quieres hablar!</p>

                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Apellido">
                    </div>
                    <div class="col-12 mt-3">
                        <textarea placeholder="¿Sobre qué quieres hablar?" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="col-12 mt-1">
                        <p class="text-secondary text-start">Recuerda incluir un título para tu charla</p>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success btn-submit w-100 pt-2 pb-2">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--FIN Conviertete en orador-->

    <!--Footer-->
    <div id="footer-mucho-contenido">
        <?php include_once("templates/footer.php"); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" defer></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>
