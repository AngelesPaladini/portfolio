<?php
$header = "about-me";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
    <?php
    include_once("header.php");
    ?>
    <main>
        <div class="container" id="descripcion">
            <div class="row sobre-mi">
                <div class="col-sm-6 mt-5">
                    <h1 class="mt-sm-5 pb-sm-4">About me</h1>
                    <p class="pb-sm-5">I consider myself a creative, curious, dynamic, loyal and responsible person.
                        I really like learning new things and I also like challenges, I am constantly looking to improve myself.
                        I See the changes as something positive and in my favor.
                    </p>
                    <a href="https://drive.google.com/file/d/1ILSmV67W6CBCHTfppmveYXaAfZARH-ai/view" class="btn btn-rojo">Download my CV</a>
                </div>
                <div class="col-sm-6">
                    <div class="mt-4 text-center">
                        <img src="./imagenes/foto perfil.jpeg" alt="Angeles Paladini" class="foto border border-5 border-white rounded-circle">
                    </div>

                </div>
            </div>
        </div>

        <section id="tecnologias" class="gradiente mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <H2 class="my-5 text-white">Stack technological</H2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>Python</h5>
                            <img src="./imagenes/python-64.png" alt="python">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>HTML5</h5>
                            <img src="./imagenes/html5-64.png" alt="python">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>CSS</h5>
                            <img src="./imagenes/css-64.png" alt="python">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>PHP</h5>
                            <img src="./imagenes/php-64.png" alt="python">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>Bootstrap</h5>
                            <img src="./imagenes/boptstrap-64.png" alt="python">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>GIT</h5>
                            <img src="./imagenes/git-64.png" alt="python">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>Javascript</h5>
                            <img src="./imagenes/Js-64.png" alt="python">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>React.js</h5>
                            <img src="./imagenes/React.js-64.png" alt="python">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>jQuery</h5>
                            <img src="./imagenes/JQuery-64.png" alt="python">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>Laravel</h5>
                            <img src="./imagenes/Laravel-64.png" alt="python">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>MySQL</h5>
                            <img src="./imagenes/MySQL-64.png" alt="python">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>Apache</h5>
                            <img src="./imagenes/apache-modificado.png" alt="python" class="img64">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0 stack">
                            <h5>Mercadopago</h5>
                            <img src="./imagenes/mercado_pago-modificado.png" alt="python" class="img64">
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i> work experience</h2>
                </div>
            </div>
            <div class="row shadow rounded">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="./imagenes/depcsuite.jpg" alt="depcsuite">
                        </div>
                        <div class="col-12 col-sm-10 p-3 ">
                            <h3>Developer Trainee</h3>
                            <h4>DEPCSUITE SA</h4>
                            <h5>2021- present</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia voluptate delectus in, commodi omnis numquam beatae deleniti earum consequatur rerum pariatur obcaecati, minus magni ducimus! Esse id placeat itaque liber
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur debitis provident expedita esse ea, itaque optio in dolor a dolores ad numquam vitae, ipsa quibusdam beatae et fugiat velit ducimus!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="./imagenes/sin-logo.png" alt="sin-logo">
                        </div>
                        <div class=" col-12 col-sm-10 p-3">
                            <h3>Production employee</h3>
                            <h4>DEBSAFP SRL</h4>
                            <h5>2021 - present</h5>
                            <p>Mass production of materials
                                schoolchildren for polling stations across the country.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="./imagenes/sin-logo.png" alt="sin-logo">
                        </div>
                        <div class=" col-12 col-sm-10 p-3">
                            <h3>Camarera</h3>
                            <h4>Coffe Sothern</h4>
                            <h5>2018 - 2019</h5>
                            <p>Tasks to develop: Customer service, cleaning, cooking,
                                cafeteria, stock and local supply</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="./imagenes/mc donals.jpg" alt="Mc Donals">
                        </div>
                        <div class=" col-12 col-sm-10 p-3">
                            <h3>Multifunctional Cashier</h3>
                            <h4>Golden arches</h4>
                            <h5>2014 - 2018</h5>
                            <p>Tasks to develop: Customer service, cashier and counter, stock and supply of the premises,
                                cleaning, children's events, marketing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Academic training</h2>
                </div>
            </div>
            <div class="row shadow rounded">
                <div class="col-12 col-sm-6">
                    <div class="row columna">
                        <div class="col-2 my-auto">
                            <img src="./imagenes/una-logo-removebg-preview.png" alt="UNA logo">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Bachelor of Visual Arts</h3>
                            <h4>National University of Arts</h4>
                            <h5>2018 - 2020</h5>
                            <p>approved subjects:</p>
                            <p>https://una.edu.ar/</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="curso" class="container">
            <div class="row">
                <div class="col pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Professional development course</h2>
                </div>
            </div>
            <div class="row shadow rounded">
                <div class="col-12 col-sm-6">
                    <div class="row columna">
                        <div class="col-sm-2 my-auto">
                            <img src="./imagenes/depcsuite.jpg" alt="DEPCsuite">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Developer Web Fullstack</h3>
                            <h4>DEPCsuite</h4>
                            <h5>Expedition:2021</h5>
                        </div>
                        <div class="col-sm-2 my-auto">
                            <img src="./imagenes/neetwork.jpg" alt="neetwork business school">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Master in Digital Marketing and Web Analytics</h3>
                            <h4>Neetwork Business School</h4>
                            <h5>2021 - Module 1</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 my-auto">
                            <img src="./imagenes/idetel.png" alt="Idetel Curso python">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Python Basic level</h3>
                            <h4>Idetel - Institute for the development of telecommunications.</h4>
                            <h5>Expedition:2021</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="hobbies" class="bg-light p-5">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-2 card text-center" id="icono">
                        <i class="fas fa-comment-alt"></i>
                    </div>
                    <div class="col-6 col-sm-4 p-5 card rounded-end">
                        <h2 class="card-tittle">Language</h2>
                        <h5>ESPANISH native</h5>
                        <h5>ENGLISH basic</h5>
                    </div>
                    <div class="col-6 col-sm-2 card text-center" id="icono">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="col-6 col-sm-4 p-5 card rounded-end">
                        <h2 class="card-tittle">Hobbies</h2>
                        <h5>Pottery</h5>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer class="footer mt-auto py-3 pb-5 text-center text-sm-left">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <a href="https://github.com/AngelesPaladini" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/angeles-paladini-3bb8761ab/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-12 col-sm-3">
                    Sponsor <a href="http://depcsuite.com">DePC Suite</a>
                </div>
                <div class="col-12 col-sm-3">
                    <a href="mailto:paladiniangeles@gmail.com">paladiniangeles@gmail.com</a>
                </div>
            </div>
        </div>
    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541155609406" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</HTml>