<?php
    session_start();
?>
<?php 
    if(!isset($_SESSION['usuario'])){
        header("Location: ../../login/principal.php");
    } ?>
<?php  include('../login/includes/head.php'); 
    $nombre = $_SESSION['nombre'];	
    $tipo_usuario = $_SESSION['tipo_usuario'];

    echo $nombre;
?>
<button><a href="salir.php">Salir</a></button>
<?php if($tipo_usuario == 1){ ?>
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
                <img src="../login/img/img1.png" class="img-fluid" width="1000" alt="">
            </a>
        </div>
    </div>
</section>
<?php } ?> 
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
<?php if($tipo_usuario ==1){ ?>
<section class="p-5" id="services">
    <div class="container py-5">
        <div class="row text-center g-4">
            <div class="col-md">
                <div style="height:100%;" class="card bg-dark text-light p-5">
                    <div class="h1 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                        </svg>
                    </div>
                    <h3 class="card-title mb-4">Registrar <br>  Ventas</h3>
                    <p style="height:50%;" class="card-text">
                        En este apartado podras registrar todas las vantas de los productos o servicios que se hicieron en la empresa.
                    </p>
                    <a href="../login/ventas/ele_venta.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
            <div class="col-md">
                    <div style="height:100%;" class="card bg-dark text-light p-5">
                        <div class="h1 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                            </svg>
                        </div>
                        <h3 class="card-title mb-4">Registrar Soporte</h3>
                        <p style="height:50%;" class="card-text">
                            En este apartado podras registrar todas las vantas de los productos o servicios que se hicieron en la empresa.
                        </p>
                        <a href="../login/registros/registro_soporte/registro_soportes.php" class="btn btn-primary">Ingresar</a>
                    </div>
                </div>
        </div>
    </div>
</section>
<?php } ?>
<?php if($tipo_usuario ==3){ ?>
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
                    <h3 class="card-title mb-4">Inventario</h3>
                    <p style="height:50%;" class="card-text">
                        En Este apartado podras registrar a todos los usuarios que interactuan con el sistema.
                    </p>
                    <a href="../login/inventario/ele_crepro.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
            <div class="col-md">
                <div style="height:100%;" class="card bg-dark text-light p-5">
                    <div class="h1 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                        </svg>
                    </div>
                    <h3 class="card-title mb-4">Registrar <br>  Ventas</h3>
                    <p style="height:50%;" class="card-text">
                        En este apartado podras registrar todas las vantas de los productos o servicios que se hicieron en la empresa.
                    </p>
                    <a href="../login/ventas/ele_venta.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
            <div class="col-md">
                <div style="height:100%;" class="card bg-dark text-light p-5">
                    <div class="h1 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                            <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                            <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z" />
                        </svg>
                    </div>
                    <h3 class="card-title mb-4">Compras</h3>
                    <p style="height:60%;" class="card-text">
                        En este apartado podras consultar todas las facturas que tiene hasta el dia la empresa con la informacion introducida por la empresa
                    </p>
                    <a href="../login/compras/tip_compras.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php if($tipo_usuario == 1){ ?>
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
</section><?php } ?>
<?php if($tipo_usuario ==3){ ?>
<section class="text-light p-5 text-center text-sm-start" id="home">
    <section class="p-5" id="productos">
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
                        <h3 class="card-title mb-4">Registrar Clientes</h3>
                        <p style="height:50%; " class="card-text">
                            En Este apartado podras registrar a todos los usuarios que interactuan con el sistema.
                        </p>
                        <a href="../login/registros/reg_cli.php" class="btn btn-primary">Ingresar</a>
                    </div>
                </div>
                <div class="col-md">
                    <div style="height:100%;" class="card bg-dark text-light p-5">
                        <div class="h1 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                            </svg>
                        </div>
                        <h3 class="card-title mb-4">Registrar Trabajadores</h3>
                        <p style="height:50%;" class="card-text">
                            En este apartado podras registrar todas las vantas de los productos o servicios que se hicieron en la empresa.
                        </p>
                        <a href="../login/registros/registro_trabajador/reg_tra.php" class="btn btn-primary">Ingresar</a>
                    </div>
                </div>
                <div class="col-md">
                    <div style="height:100%;" class="card bg-dark text-light p-5">
                        <div class="h1 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                            </svg>
                        </div>
                        <h3 class="card-title mb-4">Registrar Soporte</h3>
                        <p style="height:50%;" class="card-text">
                            En este apartado podras registrar todas las vantas de los productos o servicios que se hicieron en la empresa.
                        </p>
                        <a href="../login/registros/registro_soporte/registro_soportes.php" class="btn btn-primary">Ingresar</a>
                    </div>
                </div>
            </div>
    </section>
</section>
<?php } ?>
<?php if($tipo_usuario ==4){ ?>
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
                <img src="../login/img/img1.png" class="img-fluid" width="1000" alt="">
            </a>
        </div>
    </div>
</section>
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
                    <h3 class="card-title mb-4">Inventario</h3>
                    <p style="height:50%;" class="card-text">
                        En Este apartado podras registrar a todos los usuarios que interactuan con el sistema.
                    </p>
                    <a href="../login/inventario/ele_crepro.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
            <div class="col-md">
                <div style="height:100%;" class="card bg-dark text-light p-5">
                    <div class="h1 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                        </svg>
                    </div>
                    <h3 class="card-title mb-4">Registrar <br>  Ventas</h3>
                    <p style="height:50%;" class="card-text">
                        En este apartado podras registrar todas las vantas de los productos o servicios que se hicieron en la empresa.
                    </p>
                    <a href="../login/ventas/ele_venta.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
            <div class="col-md">
                <div style="height:100%;" class="card bg-dark text-light p-5">
                    <div class="h1 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                            <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                            <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z" />
                        </svg>
                    </div>
                    <h3 class="card-title mb-4">Compras</h3>
                    <p style="height:60%;" class="card-text">
                        En este apartado podras consultar todas las facturas que tiene hasta el dia la empresa con la informacion introducida por la empresa
                    </p>
                    <a href="../login/compras/tip_compras.php" class="btn btn-primary">Ingresar</a>
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
<section class="text-light p-5 text-center text-sm-start" id="home">
    <section class="p-5" id="productos">
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
                        <h3 class="card-title mb-4">Registrar Clientes</h3>
                        <p style="height:50%; " class="card-text">
                            En Este apartado podras registrar a todos los usuarios que interactuan con el sistema.
                        </p>
                        <a href="../login/registros/reg_cli.php" class="btn btn-primary">Ingresar</a>
                    </div>
                </div>
                <div class="col-md">
                    <div style="height:100%;" class="card bg-dark text-light p-5">
                        <div class="h1 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                            </svg>
                        </div>
                        <h3 class="card-title mb-4">Registrar Trabajadores</h3>
                        <p style="height:50%;" class="card-text">
                            En este apartado podras registrar todas las vantas de los productos o servicios que se hicieron en la empresa.
                        </p>
                        <a href="../login/registros/registro_trabajador/reg_tra.php" class="btn btn-primary">Ingresar</a>
                    </div>
                </div>
                <div class="col-md">
                    <div style="height:100%;" class="card bg-dark text-light p-5">
                        <div class="h1 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                            </svg>
                        </div>
                        <h3 class="card-title mb-4">Registrar Soporte</h3>
                        <p style="height:50%;" class="card-text">
                            En este apartado podras registrar todas las vantas de los productos o servicios que se hicieron en la empresa.
                        </p>
                        <a href="../login/registros/registro_soporte/registro_soportes.php" class="btn btn-primary">Ingresar</a>
                    </div>
                </div>
            </div>
    </section>
</section>
<?php } ?>
<?php include("../login/includes/footer.php") ?>
</body>

</html>