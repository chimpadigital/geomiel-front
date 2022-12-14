<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Órdenes de compra pendientes</title>
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
                                    <img src="assets/images/icon-ordenes-de-compra.svg" width="80%">
                                </div>
                                <h1 class="ms-2 mb-0">Órdenes de compra pendientes</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-header-img">
                    <img src="assets/images/dashboard/top-header.png" alt="header"
                        class="theme-color-default-img img-fluid w-100 h-100 animated-scale">
                </div>
            </div>
        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="row">
                <div class="col-md-12 bg-grey rounded">
                    <div class="row row-cols-1">
                        <div class="col-12 mt-5 mb-3">
                            <?php include 'includes/filters.php';?>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="tool-table d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center me-2">
                                                <img src="assets/images/icon-download.svg" width="18px">
                                            </a>
                                            <a href="#" class="d-flex align-items-center justify-content-center">
                                                <img src="assets/images/icon-print.svg" width="18px">
                                            </a>
                                        </div>
                                        <table id="example" class="table table-striped" data-toggle="data-table">
                                            <thead>
                                                <tr>
                                                    <th>Fecha</th>
                                                    <th>O/C</th>
                                                    <th>Proveedor</th>
                                                    <th class="d-flex justify-content-center">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01/02/2022</td>
                                                    <td>023547</td>
                                                    <td>Tiger Nixon</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center me-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nueva-ordenModal">
                                                                <img src="assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="assets/images/icon-delete-table.svg"
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
                                                    <td>Garrett Winters</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center me-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nueva-ordenModal">
                                                                <img src="assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="assets/images/icon-delete-table.svg"
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
                                                    <td>Ashton Cox</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center me-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nueva-ordenModal">
                                                                <img src="assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="assets/images/icon-delete-table.svg"
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
                                                    <td>Cedric Kelly</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center me-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nueva-ordenModal">
                                                                <img src="assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="assets/images/icon-delete-table.svg"
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
                                                    <td>Airi Satou</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center me-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nueva-ordenModal">
                                                                <img src="assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="assets/images/icon-delete-table.svg"
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
                                                    <td>Brielle Williamson</td>
                                                    <th>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center me-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nueva-ordenModal">
                                                                <img src="assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar orden">
                                                            </a>
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center">
                                                                <img src="assets/images/icon-delete-table.svg"
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
        <?php include 'includes/speed-dial.php';?>
    </main>
   
    <?php include 'includes/script.php';?>
</body>

</html>