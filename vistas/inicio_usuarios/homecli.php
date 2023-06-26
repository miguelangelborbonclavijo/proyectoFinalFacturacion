<?php include("../../vistas/includes/head.php") ?>
<section class="bg-dark text-light p-5 text-center text-sm-start" id="home">
    <div class="container py-5">
        <div class="d-sm-flex align-item-center">
            <div>
                <h1>Bienvenidos a FacElec</h1>
                <h3 class="my-4">Quienes somos</h3>
                <p class="lead my-4">
                    Somos una empresa nueva en el mercado que ofrece un serivicio
                    de facturas electronicas ya que gran parte de los negocios
                    lo necesitan para su funcionalidad
                </p>
                <button class="btn btn-primary btn-lg">Sobre nosotros</button>
            </div>
            <a href="">
                <img src="../img/img1.png" class="img-fluid" width="1000" alt="">
            </a>
        </div>
    </div>
</section>
<!--<section class="bg-primary text-light p-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>-->
<section class="p-5" id="services">
    <div class="container py-5">
        <div class="row text-center g-4">
            <div class="col-md">
                <div style="height:100%;" class="card bg-dark text-light p-5">
                    <div class="h1 mb-3">
                        <div class="contenedor-icono">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="card-title mb-4">Registrar soporte</h3>
                    <p style="height:50%;" class="card-text">
                        En Este apartado podras registrar a todos los usuarios que interactuan con el sistema.
                    </p>
                    <a href="../../../proyectoFinalFacturacion/vistas/registros/registro_soporte/registro_soportes.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
            <div class="col-md">
                <div style="height:100%;" class="card bg-dark text-light p-5">
                    <div class="h1 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus" viewBox="0 0 16 16">
                            <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z" />
                            <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z" />
                            <path d="M8.5 6.5a.5.5 0 0 0-1 0V8H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V9H10a.5.5 0 0 0 0-1H8.5V6.5Z" />
                        </svg>
                    </div>
                    <h3 class="card-title mb-4">Compras</h3>
                    <p style="height:60%;" class="card-text">
                        En este apartado pordras saber todo lo que hay en el inventario y actualizar o registrar todos las entradas y salidas.
                    </p>
                    <a href="../../../proyectoFinalFacturacion/vistas/compras/entradas.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-dark text-light p-5" id="learn">
    <div class="container py-5">
        <div class="row align-items-cente justify-content-between">
            <div class="col-md p-5">
                <h2>Ventajas al utlizar nuestro servicio</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat nobis veritatis consequatur excepturi atque! Vero, deleniti. Iste voluptatum exercitationem, minus ullam odio non ex perferendis sed a rerum repudiandae corporis!</p>
                <a href="http://">Nuestras Ventajas</a>
            </div>
            <div class="col-md">
                <a href=""></a>
                <img src="https://www.easyap.com/wp-content/uploads/2020/07/workflow-de-facturas-recibidas.svg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<section class="p-5" id="preguntas">
    <div class="container py-5">
        <h2 class="text-center mb-4">Preguntas frecuentes</h2>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("../../vistas/includes/creadores.php") ?>
<?php include("../../vistas/includes/footer.php") ?>
</body>

</html>