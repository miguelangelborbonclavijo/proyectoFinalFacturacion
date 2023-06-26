<?php include('../registros/db.php') ?>
<?php include("../includes/head.php") ?>
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
                    <h3 class="card-title mb-4">Proveedores</h3>
                    <p style="height:50%;" class="card-text">
                        En Este apartado podras registrar a todos los usuarios que interactuan con el sistema.
                    </p>
                    <a href="../../../proyectoFinalFacturacion/vistas/compras/registro_proveedores/registro_proveedor.php" class="btn btn-primary">Ingresar</a>
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
                    <h3 class="card-title mb-4">Entradas</h3>
                    <p style="height:50%;" class="card-text">
                        En este apartado podras registrar todas las vantas de los productos o servicios que se hicieron en la empresa.
                    </p>
                    <a href="../../../proyectoFinalFacturacion/vistas/compras/entradas.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("../includes/footer.php") ?>
</body>

</html>