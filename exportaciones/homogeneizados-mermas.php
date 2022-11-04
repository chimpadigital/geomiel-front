<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Mermas para homogeneizar</title>
    <?php include 'includes/metas.php';?>
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    <?php include 'includes/sidebar-menu.php';?>

    <main class="main-content">
        <div class="position-relative iq-banner">
            <?php include 'includes/navbar.php';?>
            <div class="iq-navbar-header" style="height: 215px;">
                <div class="container-fluid iq-container">
                    <div class="row">
                        <div class="col-md-12 d-flex flex-row justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="box-img">
                                    <img src="../assets/images/honeyjar2.svg" alt="icono-contratos-activos">
                                </div>
                                <h1 class="ms-2 mb-0">Mermas para homogeneizar</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4 d-flex justify-content-between">
                    <div class="col">
                    <a href="javascript:history.back()" class="btn btn-primary">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.83828 7.64785C3.88472 7.6013 3.93989 7.56436 4.00063 7.53915C4.06137 7.51395 4.12648 7.50098 4.19224 7.50098C4.258 7.50098 4.32311 7.51395 4.38385 7.53915C4.44459 7.56436 4.49976 7.6013 4.5462 7.64785L10.1915 13.2942L15.8369 7.64785C15.8834 7.60137 15.9385 7.5645 15.9993 7.53934C16.06 7.51419 16.1251 7.50124 16.1908 7.50124C16.2566 7.50124 16.3217 7.51419 16.3824 7.53934C16.4431 7.5645 16.4983 7.60137 16.5448 7.64785C16.5913 7.69434 16.6281 7.74952 16.6533 7.81025C16.6785 7.87098 16.6914 7.93608 16.6914 8.00181C16.6914 8.06755 16.6785 8.13264 16.6533 8.19337C16.6281 8.2541 16.5913 8.30929 16.5448 8.35577L10.5455 14.3551C10.4991 14.4016 10.4439 14.4386 10.3831 14.4638C10.3224 14.489 10.2573 14.5019 10.1915 14.5019C10.1258 14.5019 10.0607 14.489 9.99993 14.4638C9.93919 14.4386 9.88402 14.4016 9.83758 14.3551L3.83828 8.35577C3.79173 8.30933 3.75479 8.25416 3.72958 8.19342C3.70438 8.13268 3.69141 8.06757 3.69141 8.00181C3.69141 7.93605 3.70438 7.87094 3.72958 7.8102C3.75479 7.74946 3.79173 7.69429 3.83828 7.64785Z"
                                            fill="white" />
                                    </svg>
                                    Volver al listado
                     </a>
                    </div>
                     <div class="col d-flex justify-content-end">
                     <a href="detalle-lote2.php" class="btn btn-primary">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.96684 1V13" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M13 6.9579H1" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    Crear lote
                     </a>
                     </div>
                    </div>
                </div>
                <div class="iq-header-img">
                    <img src="../assets/images/dashboard/top-header.png" alt="header"
                        class="theme-color-default-img img-fluid w-100 h-100 animated-scale">
                </div>
            </div>
        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="row">
                <div class="col-12 mt-5">
                    <?php include 'includes/filters-homogeneizacion.php';?>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="tool-table d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center me-2">
                                        <img src="../assets/images/icon-download.svg" width="18px">
                                    </a>
                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                        <img src="../assets/images/icon-print.svg" width="18px">
                                    </a>
                                </div>
                                <table id="example" class="table table-striped" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">N° Lote</th>
                                            <th class="text-center">N° Contrato</th>
                                            <th class="text-center">N° Contenedor</th>
                                            <th class="text-center">Tambores</th>
                                            <th class="text-center">Kg Neto</th>
                                            <th class="text-center">Consolidación</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">GEO H 2021 - 324</td>
                                            <td class="text-center">TFE24/GEO210528Y25</td>
                                            <td class="text-center">BEAU 206072-6</td>
                                            <td class="text-center">55</td>
                                            <td class="text-center">20.000</td>
                                            <td class="text-center">21/02/2022</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO H 2021 - 328</td>
                                            <td class="text-center">TFE24/GEO210528Y25</td>
                                            <td class="text-center">HLXU 126995-3</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">18.954</td>
                                            <td class="text-center">21/02/2022</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2021 - 304</td>
                                            <td class="text-center">PC11999</td>
                                            <td class="text-center">MEDU 293828-9</td>
                                            <td class="text-center">64</td>
                                            <td class="text-center">5.263</td>
                                            <td class="text-center">21/02/2022</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2022 - 306</td>
                                            <td class="text-center">PC11999</td>
                                            <td class="text-center">MEDU 293828-9</td>
                                            <td class="text-center">48</td>
                                            <td class="text-center">13.874</td>
                                            <td class="text-center">21/02/2022</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2021 - 305</td>
                                            <td class="text-center">PC11997</td>
                                            <td class="text-center">HLXU 126401-5 </td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">18.457</td>
                                            <td class="text-center">21/02/2022</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2022 - 307</td>
                                            <td class="text-center">FP-AR-2022-5</td>
                                            <td class="text-center">UACU 369898-9</td>
                                            <td class="text-center">55</td>
                                            <td class="text-center">8.754</td>
                                            <td class="text-center">21/02/2022</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2022 - 308</td>
                                            <td class="text-center">HLBU 110737-0</td>
                                            <td class="text-center">FP-AR-2022-5</td>
                                            <td class="text-center">61</td>
                                            <td class="text-center">3.541</td>
                                            <td class="text-center">21/02/2022</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2022 - 308</td>
                                            <td class="text-center">HLBU 110737-0</td>
                                            <td class="text-center">PC12033</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">16.845</td>
                                            <td class="text-center">21/02/2022</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <?php include 'includes/speed-dial.php';?>
    </main>
    <?php include 'includes/script.php';?>
</body>

</html>