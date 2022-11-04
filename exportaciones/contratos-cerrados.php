<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Contratos cerrados</title>
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
                                    <img src="../assets/images/checklist2.svg" alt="icono-contratos-activos">
                                </div>
                                <h1 class="ms-2 mb-0">Contratos cerrados</h1>
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
                    <?php include 'includes/filters.php';?>
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
                                            <th class="text-center">N° Contrato</th>
                                            <th class="text-center">Destino</th>
                                            <th class="text-center">Cliente</th>
                                            <th class="text-center">C.Restantes</th>
                                            <th class="text-center">Color</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">TFE24/GEO210528Y25</td>
                                            <td class="text-center">Estados Unidos</td>
                                            <td class="text-center">John Doe</td>
                                            <td class="text-center">10</td>
                                            <td class="text-center">3</td>
                                            <th>
                                                <div class="d-flex justify-content-around">
                                                    <a href="lotes2.php" class="btn btn-secondary">
                                                        Lotes
                                                    </a>
                                                    <a href="contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver contrato">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">TFE24/GEO210528Y25</td>
                                            <td class="text-center">Estados Unidos</td>
                                            <td class="text-center">John Doe</td>
                                            <td class="text-center">10</td>
                                            <td class="text-center">3</td>
                                            <th>
                                                <div class="d-flex justify-content-around">
                                                    <a href="lotes2.php" class="btn btn-secondary">
                                                        Lotes
                                                    </a>
                                                    <a href="contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver contrato">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">PC11999</td>
                                            <td class="text-center">España</td>
                                            <td class="text-center">John Doe</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">4</td>
                                            <th>
                                                <div class="d-flex justify-content-around">
                                                    <a href="lotes2.php" class="btn btn-secondary">
                                                        Lotes
                                                    </a>
                                                    <a href="contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver contrato">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">FP-AR-2022-5</td>
                                            <td class="text-center">Canadá</td>
                                            <td class="text-center">John Doe</td>
                                            <td class="text-center">14</td>
                                            <td class="text-center">5</td>
                                            <th>
                                                <div class="d-flex justify-content-around">
                                                    <a href="lotes2.php" class="btn btn-secondary">
                                                        Lotes
                                                    </a>
                                                    <a href="contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver contrato">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">TFE24/GEO210528Y25</td>
                                            <td class="text-center">Inglaterra</td>
                                            <td class="text-center">John Doe</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">1</td>
                                            <th>
                                                <div class="d-flex justify-content-around">
                                                    <a href="lotes2.php" class="btn btn-secondary">
                                                        Lotes
                                                    </a>
                                                    <a href="contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver contrato">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">PC12033</td>
                                            <td class="text-center">Canadá</td>
                                            <td class="text-center">John Doe</td>
                                            <td class="text-center">7</td>
                                            <td class="text-center">2</td>
                                            <th>
                                                <div class="d-flex justify-content-around">
                                                    <a href="lotes2.php" class="btn btn-secondary">
                                                        Lotes
                                                    </a>
                                                    <a href="contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver contrato">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">PC12033</td>
                                            <td class="text-center">España</td>
                                            <td class="text-center">John Doe</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">3</td>
                                            <th>
                                                <div class="d-flex justify-content-around">
                                                    <a href="lotes2.php" class="btn btn-secondary">
                                                        Lotes
                                                    </a>
                                                    <a href="contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver contrato">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">PC12033</td>
                                            <td class="text-center">Italia</td>
                                            <td class="text-center">John Doe</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">2</td>
                                            <th>
                                                <div class="d-flex justify-content-around">
                                                    <a href="lotes2.php" class="btn btn-secondary">
                                                        Lotes
                                                    </a>
                                                    <a href="contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver contrato">
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