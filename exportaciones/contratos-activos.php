<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | tambores</title>
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
                                    <img src="../assets/images/checklistt.svg" alt="icono-contactos">
                                </div>
                                <h1 class="ms-2 mb-0">Contratos activos</h1>
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
                                                    <a href="tambores.php" class="btn btn-secondary">
                                                        Lotear
                                                    </a>
                                                    <a href="editar-contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar contrato">
                                                    </a>
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
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
                                                    <a href="tambores.php" class="btn btn-secondary">
                                                        Lotear
                                                    </a>
                                                    <a href="editar-contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar contrato">
                                                    </a>
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
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
                                                    <a href="tambores.php" class="btn btn-secondary">
                                                        Lotear
                                                    </a>
                                                    <a href="editar-contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar contrato">
                                                    </a>
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">FP-AR-2022-5</td>
                                            <td class="text-center">Canadá</td>
                                            <td class="text-center">John Doe</td>
                                            <td class="text-center">
                                                14
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" class="ms-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-custom-class="custom-tooltip" data-bs-title="Revisar">
                                                    <g clip-path="url(#clip0_3032_70275)">
                                                        <path
                                                            d="M8.48441 0.407813C7.94066 -0.135937 7.05941 -0.135937 6.51566 0.407813L0.408789 6.51563C-0.134961 7.05938 -0.134961 7.93969 0.408789 8.4825L6.51754 14.5913C7.06129 15.135 7.9416 15.135 8.48441 14.5913L14.5932 8.4825C15.1369 7.93875 15.1369 7.05844 14.5932 6.51563L8.48441 0.407813ZM7.50004 3.75C8.0016 3.75 8.39441 4.18313 8.34379 4.68281L8.01566 7.97063C8.00464 8.09979 7.94554 8.22011 7.85006 8.30779C7.75458 8.39546 7.62967 8.44411 7.50004 8.44411C7.37041 8.44411 7.2455 8.39546 7.15002 8.30779C7.05454 8.22011 6.99544 8.09979 6.98441 7.97063L6.65629 4.68281C6.64451 4.56491 6.65755 4.44584 6.69458 4.33328C6.73161 4.22072 6.79181 4.11717 6.8713 4.02929C6.95079 3.94142 7.0478 3.87116 7.15609 3.82306C7.26438 3.77495 7.38155 3.75007 7.50004 3.75ZM7.50191 9.375C7.75055 9.375 7.98901 9.47377 8.16483 9.64959C8.34064 9.8254 8.43941 10.0639 8.43941 10.3125C8.43941 10.5611 8.34064 10.7996 8.16483 10.9754C7.98901 11.1512 7.75055 11.25 7.50191 11.25C7.25327 11.25 7.01482 11.1512 6.839 10.9754C6.66319 10.7996 6.56441 10.5611 6.56441 10.3125C6.56441 10.0639 6.66319 9.8254 6.839 9.64959C7.01482 9.47377 7.25327 9.375 7.50191 9.375Z"
                                                            fill="#F16A1B" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_3032_70275">
                                                            <rect width="15" height="15" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>

                                            </td>
                                            <td class="text-center">5</td>
                                            <th>
                                                <div class="d-flex justify-content-around">
                                                    <a href="tambores.php" class="btn btn-secondary">
                                                        Lotear
                                                    </a>
                                                    <a href="editar-contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar contrato">
                                                    </a>
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
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
                                                    <a href="tambores.php" class="btn btn-secondary">
                                                        Lotear
                                                    </a>
                                                    <a href="editar-contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar contrato">
                                                    </a>
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
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
                                                    <a href="tambores.php" class="btn btn-secondary">
                                                        Lotear
                                                    </a>
                                                    <a href="editar-contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar contrato">
                                                    </a>
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
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
                                                    <a href="tambores.php" class="btn btn-secondary">
                                                        Lotear
                                                    </a>
                                                    <a href="editar-contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar contrato">
                                                    </a>
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
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
                                                    <a href="tambores.php" class="btn btn-secondary">
                                                        Lotear
                                                    </a>
                                                    <a href="editar-contrato.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar contrato">
                                                    </a>
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
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