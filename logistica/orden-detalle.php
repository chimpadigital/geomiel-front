<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Orden detalle</title>
    <?php include 'includes/metas.php';?>
</head>

<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    <main class="main-content">
        <div class="position-relative iq-banner">
            <?php include 'includes/navbar.php';?>
            <div class="container">
                <div class="card my-5 p-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Detalle</h1>
                            <hr>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Fecha</h5>
                            <p>11/09/2022</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Comprador</h5>
                            <p>Marta París</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Proveedor</h5>
                            <p>Jorge Gutierrez</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Tipo de pago</h5>
                            <p>Factura</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Pago anticipado</h5>
                            <p>Si</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Ubicación</h5>
                            <p class="mb-0">Lorem ipsum 123</p>
                            <strong>General Pico, La Pampa.</strong>
                        </div>
                        <div class="col-md-12 mt-5">
                            <h2>Transacciones realizadas</h2>
                            <hr>
                            <h4 class="mb-3">Tambores</h4>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Precio</h5>
                            <p>$250/kg</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Tambores</h5>
                            <p>55 unidades</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Peso total de miel</h5>
                            <p>125364 kg</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Peso total</h5>
                            <p>$13750</p>
                        </div>
                        <div class="col-md-12 mt-5">
                            <h2>Transacciones realizadas</h2>
                            <hr>
                            <h4 class="mb-3">Canjes</h4>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Producto</h5>
                            <p>Tambores nuevos</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Equivalencia</h5>
                            <p>13 a 1</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Unidades Canjeadas</h5>
                            <p>4</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">PRECIO TOTAL A PAGAR</h5>
                            <p><strong>$12500</strong></p>
                        </div>
                        <div class="col-12 my-5">
                            <table id="example" class="table table-striped" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>Tambores</th>
                                        <th>Peso</th>
                                        <th>Estado</th>
                                        <th class="d-flex justify-content-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ID 2033</td>
                                        <td>375 kg</td>
                                        <td>
                                            <div class="progressbullet">
                                                <div class="bar">
                                                    <div class="bar__fill" style="width: 100%;"></div>
                                                </div>
                                                <div class="point point--active">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Treansporte">
                                                    </div>
                                                </div>
                                                <div class="point point--active">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-title="Depósito">
                                                    </div>
                                                </div>
                                                <div class="point point--active">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Laboratorio">
                                                    </div>
                                                </div>
                                                <div class="point point--active">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-title="Venta">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="#"
                                                    class="d-flex align-items-center justify-content-center me-4"
                                                    data-bs-toggle="modal" data-bs-target="#tamborModal">
                                                    <img src="../assets/images/icon-eye.svg" width="18px"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Ver tambor">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ID 3093</td>
                                        <td>203 kg</td>
                                        <td>
                                            <div class="progressbullet">
                                                <div class="bar">
                                                    <div class="bar__fill" style="width: 33%;"></div>
                                                </div>
                                                <div class="point point--active">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Treansporte">
                                                    </div>
                                                </div>
                                                <div class="point">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-title="Depósito">
                                                    </div>
                                                </div>
                                                <div class="point">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Laboratorio">
                                                    </div>
                                                </div>
                                                <div class="point">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-title="Venta">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="#"
                                                    class="d-flex align-items-center justify-content-center me-4"
                                                    data-bs-toggle="modal" data-bs-target="#tamborModal">
                                                    <img src="../assets/images/icon-eye.svg" width="18px"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Ver tambor">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ID 2033</td>
                                        <td>375 kg</td>
                                        <td>
                                            <div class="progressbullet">
                                                <div class="bar">
                                                    <div class="bar__fill" style="width: 66%;"></div>
                                                </div>
                                                <div class="point point--active">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Treansporte">
                                                    </div>
                                                </div>
                                                <div class="point point--active">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-title="Depósito">
                                                    </div>
                                                </div>
                                                <div class="point">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Laboratorio">
                                                    </div>
                                                </div>
                                                <div class="point">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-title="Venta">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="#"
                                                    class="d-flex align-items-center justify-content-center me-4"
                                                    data-bs-toggle="modal" data-bs-target="#tamborModal">
                                                    <img src="../assets/images/icon-eye.svg" width="18px"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Ver tambor">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ID 87213</td>
                                        <td>375 kg</td>
                                        <td>
                                            <div class="progressbullet">
                                                <div class="bar">
                                                    <div class="bar__fill" style="width: 33%;"></div>
                                                </div>
                                                <div class="point point--active">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Treansporte">
                                                    </div>
                                                </div>
                                                <div class="point">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-title="Depósito">
                                                    </div>
                                                </div>
                                                <div class="point">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Laboratorio">
                                                    </div>
                                                </div>
                                                <div class="point">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-title="Venta">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="#"
                                                    class="d-flex align-items-center justify-content-center me-4"
                                                    data-bs-toggle="modal" data-bs-target="#tamborModal">
                                                    <img src="../assets/images/icon-eye.svg" width="18px"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Ver tambor">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ID 7620</td>
                                        <td>500 kg</td>
                                        <td>
                                            <div class="progressbullet">
                                                <div class="bar">
                                                    <div class="bar__fill" style="width: 100%;"></div>
                                                </div>
                                                <div class="point point--active">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Treansporte">
                                                    </div>
                                                </div>
                                                <div class="point point--active">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-title="Depósito">
                                                    </div>
                                                </div>
                                                <div class="point point--active">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Laboratorio">
                                                    </div>
                                                </div>
                                                <div class="point point--active">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-title="Venta">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="#"
                                                    class="d-flex align-items-center justify-content-center me-4"
                                                    data-bs-toggle="modal" data-bs-target="#tamborModal">
                                                    <img src="../assets/images/icon-eye.svg" width="18px"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Ver tambor">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ID 2033</td>
                                        <td>375 kg</td>
                                        <td>
                                            <div class="progressbullet">
                                                <div class="bar">
                                                    <div class="bar__fill" style="width: 0%;"></div>
                                                </div>
                                                <div class="point">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Treansporte">
                                                    </div>
                                                </div>
                                                <div class="point">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-title="Depósito">
                                                    </div>
                                                </div>
                                                <div class="point">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Laboratorio">
                                                    </div>
                                                </div>
                                                <div class="point">
                                                    <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-title="Venta">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="#"
                                                    class="d-flex align-items-center justify-content-center me-4"
                                                    data-bs-toggle="modal" data-bs-target="#tamborModal">
                                                    <img src="../assets/images/icon-eye.svg" width="18px"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Ver tambor">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 mt-3">
                            <h4 class="mb-3">Cera</h4>
                            <hr>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Tipo</h5>
                            <p>Opérculo</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Precio</h5>
                            <p>$180/kg</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">Peso total</h5>
                            <p>375 kg</p>
                        </div>
                        <div class="col-md-3 my-2">
                            <h5 class="mb-3">PRECIO TOTAL A PAGAR</h5>
                            <p><strong>$67500</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="tamborModal" tabindex="-1" aria-labelledby="tamborModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="pt-5 px-5">
                <h1 class="text-primary">Detalle tambor 1 - ID 1235</h1>
            </div>
            <div class="modal-body p-5">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h4 class="mb-3">Compra</h4>
                        <hr>
                    </div>
                    <div class="col-md-2 my-2">
                        <h6>Fecha</h6>
                        <p>01/01/2022</p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Peso neto apicultor</h6>
                        <p>320 kg</p>
                    </div>
                    <div class="col-md-2 my-2">
                        <h6>Tara</h6>
                        <p>320 kg</p>
                    </div>
                    <div class="col-md-2 my-2">
                        <h6>Bruto</h6>
                        <p>320 kg</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h4 class="mb-3">Logística</h4>
                        <hr>
                    </div>
                    <div class="col-md-2 my-2">
                        <h6>Fecha</h6>
                        <p>01/01/2022</p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Peso neto transportista</h6>
                        <p>320 kg</p>
                    </div>
                    <div class="col-md-2 my-2">
                        <h6>Tara</h6>
                        <p>320 kg</p>
                    </div>
                    <div class="col-md-2 my-2">
                        <h6>Bruto</h6>
                        <p>320 kg</p>
                    </div>
                    <div class="col-md-12 mb-2">
                        <h6>Historial</h6>
                        <ul>
                            <li>10/02/2022 - Depósito 1</li>
                            <li>01/02/2022 - Depósito 2 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Potenti tellus gravida lobortis pellentesque. </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h4 class="mb-3">Depósito</h4>
                        <hr>
                    </div>
                    <div class="col-md-2 my-2">
                        <h6>Fecha</h6>
                        <p>01/01/2022</p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Peso Geomiel</h6>
                        <p>320 kg</p>
                    </div>
                    <div class="col-md-2 my-2">
                        <h6>Tara</h6>
                        <p>320 kg</p>
                    </div>
                    <div class="col-md-2 my-2">
                        <h6>Bruto</h6>
                        <p>320 kg</p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Muestreo</h6>
                        <p>Realiazado</p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <h6 class="mb-2">Observaciones</h6>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus illum veniam sit, tenetur officia ad iusto aut. Blanditiis minima ad, rerum enim eius quae iusto. Facilis, recusandae maiores. Magnam, reprehenderit!</p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <h6 class="mb-2">Imagenes adjuntas</h6>
                        <img src="../assets/images/img-adjunta.png" alt="">
                        <img src="../assets/images/img-adjunta.png" alt="">
                        <img src="../assets/images/img-adjunta.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h4 class="mb-3">Depósito</h4>
                        <hr>
                    </div>
                    <div class="col-md-2 my-2">
                        <h6>Fecha</h6>
                        <p>01/01/2022</p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>ID Muestra</h6>
                        <p>3049</p>
                    </div>
                    <div class="col-md-2 my-2">
                        <h6>Estado</h6>
                        <p>Aprobado</p>
                    </div>
                    <div class="col-md-2 my-2">
                        <h6>Archivo</h6>
                        <p>912</p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Lote</h6>
                        <p>110039</p>
                    </div>

                    <div class="col-md-12 mt-2">
                        <p><strong>Análisis individuales</strong></p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Color</h6>
                        <p>32 mm</p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Humedad</h6>
                        <p>%15,5</p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Adulteración</h6>
                        <p>Negativo</p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Solidificación</h6>
                        <p>Liquida</p>
                    </div>

                    <div class="col-md-12 mt-2">
                        <p><strong>Análisis adicionales</strong></p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Lorem</h6>
                        <p>32 mm</p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Lorem</h6>
                        <p>%15,5</p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Lorem</h6>
                        <p>Negativo</p>
                    </div>
                    <div class="col-md-3 my-2">
                        <h6>Lorem</h6>
                        <p>Liquida</p>
                    </div>

                    <div class="col-md-6 mb-2">
                        <h6 class="mb-2">Observaciones</h6>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus illum veniam sit, tenetur officia ad iusto aut. Blanditiis minima ad, rerum enim eius quae iusto. Facilis, recusandae maiores. Magnam, reprehenderit!</p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <h6 class="mb-2">Imagenes adjuntas</h6>
                        <img src="../assets/images/img-adjunta.png" alt="">
                        <img src="../assets/images/img-adjunta.png" alt="">
                        <img src="../assets/images/img-adjunta.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php include 'includes/script.php';?>
</body>

</html>