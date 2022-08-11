<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Proveedores</title>
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
                                <img src="assets/images/icon-provedores.svg" alt="">
                                <h1 class="ms-2 mb-0">Provedores</h1>
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
                        <div class="col-md-12" id="search">
                            <h2 class="mb-3 mt-5">Estado de órdenes activas</h2>
                            <div class="card card-body rounded-pill d-flex justify-content-around text-center py-3">
                                <div class="input-group search-input">
                                    <input type="search" class="form-control" placeholder="Buscar órden de compra">
                                    <svg class="ms-3" width="20px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="#F16A1B"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                        <path d="M18.0186 18.4851L21.5426 22" stroke="#F16A1B" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
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
                                                    <th>Proveedor</th>
                                                    <th>CUIT</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>30-25352419-9</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center me-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nuevo-proveedorModal">
                                                                <img src="assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar proveedor">
                                                            </a>
                                                            <a href="estado-de-cuenta.php"
                                                                class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="assets/images/icon-wallet.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Estado de cuenta">
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
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>33-25353319-9</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center me-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nuevo-proveedorModal">
                                                                <img src="assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar proveedor">
                                                            </a>
                                                            <a href="estado-de-cuenta.php"
                                                                class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="assets/images/icon-wallet.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Estado de cuenta">
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
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>30-25322219-3</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center me-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nuevo-proveedorModal">
                                                                <img src="assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar proveedor">
                                                            </a>
                                                            <a href="estado-de-cuenta.php"
                                                                class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="assets/images/icon-wallet.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Estado de cuenta">
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
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>22-23452419-9</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center me-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nuevo-proveedorModal">
                                                                <img src="assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar proveedor">
                                                            </a>
                                                            <a href="estado-de-cuenta.php"
                                                                class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="assets/images/icon-wallet.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Estado de cuenta">
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
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>30-25352119-1</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center me-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nuevo-proveedorModal">
                                                                <img src="assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar proveedor">
                                                            </a>
                                                            <a href="estado-de-cuenta.php"
                                                                class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="assets/images/icon-wallet.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Estado de cuenta">
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
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>30-25300129-0</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#"
                                                                class="d-flex align-items-center justify-content-center me-4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#nuevo-proveedorModal">
                                                                <img src="assets/images/icon-edit.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Editar proveedor">
                                                            </a>
                                                            <a href="estado-de-cuenta.php"
                                                                class="d-flex align-items-center justify-content-center me-4">
                                                                <img src="assets/images/icon-wallet.svg" width="18px"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="Estado de cuenta">
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
                                                    </td>
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