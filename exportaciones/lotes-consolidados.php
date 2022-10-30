<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Lotes totales consolidados</title>
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
                                    <img src="../assets/images/tilde.svg" alt="icono-contratos-activos">
                                </div>
                                <h1 class="ms-2 mb-0">Lotes totales consolidados</h1>
                            </div>
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
                <div class="col-12">
                    <?php include 'includes/filters-lote.php';?>
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
                                            <th class="text-center">N° Contenedor</th>
                                            <th class="text-center">Tambores</th>
                                            <th class="text-center">Consolidación</th>
                                            <th class="text-center">Tipo de miel</th>
                                            <th class="text-center">Kg Neto</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">GEO H 2021 - 324</td>
                                            <td class="text-center">BEAU 206072-6</td>
                                            <td class="text-center">55</td>
                                            <td class="text-center">21/02/2022</td>
                                            <td class="text-center">A Granel</td>
                                            <td class="text-center">20.000</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO H 2021 - 328</td>
                                            <td class="text-center">HLXU 126995-3</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">21/02/2022</td>
                                            <td class="text-center">A Granel</td>
                                            <td class="text-center">18.954</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2021 - 304</td>
                                            <td class="text-center">MEDU 293828-9</td>
                                            <td class="text-center">64</td>
                                            <td class="text-center">21/02/2022</td>
                                            <td class="text-center">Homogenea</td>
                                            <td class="text-center">5.263</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2022 - 306</td>
                                            <td class="text-center">MEDU 293828-9</td>
                                            <td class="text-center">48</td>
                                            <td class="text-center">21/02/2022</td>
                                            <td class="text-center">Homogenea</td>
                                            <td class="text-center">13.874</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2021 - 305</td>
                                            <td class="text-center">HLXU 126401-5 </td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">21/02/2022</td>
                                            <td class="text-center">A Granel</td>
                                            <td class="text-center">18.457</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2022 - 307</td>
                                            <td class="text-center">UACU 369898-9</td>
                                            <td class="text-center">55</td>
                                            <td class="text-center">21/02/2022</td>
                                            <td class="text-center">A Granel</td>
                                            <td class="text-center">8.754</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2022 - 308</td>
                                            <td class="text-center">HLBU 110737-0</td>
                                            <td class="text-center">61</td>
                                            <td class="text-center">21/02/2022</td>
                                            <td class="text-center">Homogenea</td>
                                            <td class="text-center">3.541</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2022 - 308</td>
                                            <td class="text-center">HLBU 110737-0</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">21/02/2022</td>
                                            <td class="text-center">Homogenea</td>
                                            <td class="text-center">16.845</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                    <a href="contratos-activos.php">
                                                        <img src="../assets/images/icon-download.svg" alt="icono-descarga">
                                                    </a>
                                                    <a href="orden-detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Total</td>
                                            <td></td>
                                            <td class="text-center">443</td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">105.688</td>
                                            <th></th>
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