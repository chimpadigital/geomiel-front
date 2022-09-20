<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Ingresos</title>
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
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <div class="box-img">
                                    <img src="../assets/images/icon-ingreso.svg" width="80%">
                                </div>
                                <h1 class="ms-2 mb-0">Ingresos</h1>
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
                <div class="col-md-12 bg-grey rounded">
                    <div class="row row-cols-1">
                        <div class="col-12 mt-5 mb-3">
                            <?php include '../includes/filters.php';?>
                        </div>
                        <div class="col-12">
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
                                                    <th>Fecha</th>
                                                    <th>O/R</th>
                                                    <th>O/C</th>
                                                    <th>Tambores</th>
                                                    <th>Cera</th>
                                                    <th class="d-flex justify-content-center">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01/02/2022</td>
                                                    <td>023547</td>
                                                    <td>44762</td>
                                                    <td>44</td>
                                                    <td>132</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="orden-detalle.php"
                                                               target="_blanck" class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="../assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/icon-delete-table.svg"
                                                                    width="18px" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Eliminar proveedor">
                                                            </a>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>01/02/2022</td>
                                                    <td>023547</td>
                                                    <td>44762</td>
                                                    <td>44</td>
                                                    <td>132</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="orden-detalle.php"
                                                               target="_blanck" class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="../assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/icon-delete-table.svg"
                                                                    width="18px" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Eliminar proveedor">
                                                            </a>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>01/02/2022</td>
                                                    <td>023547</td>
                                                    <td>44762</td>
                                                    <td>44</td>
                                                    <td>132</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="orden-detalle.php"
                                                               target="_blanck" class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="../assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/icon-delete-table.svg"
                                                                    width="18px" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Eliminar proveedor">
                                                            </a>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>01/02/2022</td>
                                                    <td>023547</td>
                                                    <td>44762</td>
                                                    <td>44</td>
                                                    <td>132</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="orden-detalle.php"
                                                               target="_blanck" class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="../assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/icon-delete-table.svg"
                                                                    width="18px" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Eliminar proveedor">
                                                            </a>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>01/02/2022</td>
                                                    <td>023547</td>
                                                    <td>44762</td>
                                                    <td>44</td>
                                                    <td>132</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="orden-detalle.php"
                                                               target="_blanck" class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="../assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/icon-delete-table.svg"
                                                                    width="18px" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Eliminar proveedor">
                                                            </a>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>01/02/2022</td>
                                                    <td>023547</td>
                                                    <td>44762</td>
                                                    <td>44</td>
                                                    <td>132</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="orden-detalle.php"
                                                               target="_blanck" class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="../assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/icon-delete-table.svg"
                                                                    width="18px" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Eliminar proveedor">
                                                            </a>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>01/02/2022</td>
                                                    <td>023547</td>
                                                    <td>44762</td>
                                                    <td>44</td>
                                                    <td>132</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="orden-detalle.php"
                                                               target="_blanck" class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="../assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/icon-delete-table.svg"
                                                                    width="18px" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Eliminar proveedor">
                                                            </a>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>01/02/2022</td>
                                                    <td>023547</td>
                                                    <td>44762</td>
                                                    <td>44</td>
                                                    <td>132</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="orden-detalle.php"
                                                               target="_blanck" class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="../assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/icon-delete-table.svg"
                                                                    width="18px" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Eliminar proveedor">
                                                            </a>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>01/02/2022</td>
                                                    <td>023547</td>
                                                    <td>44762</td>
                                                    <td>44</td>
                                                    <td>132</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="orden-detalle.php"
                                                               target="_blanck" class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="../assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/icon-delete-table.svg"
                                                                    width="18px" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Eliminar proveedor">
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
        </div>
    </main>
   
    <?php include 'includes/script.php';?>
</body>

</html>