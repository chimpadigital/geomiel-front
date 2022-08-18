<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Ingresos Pendientes</title>
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
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Filtros
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Proveedor</label>
                                                    <select class="form-select mb-3">
                                                        <option selected=""></option>
                                                        <option value="1">001 - </option>
                                                        <option value="2">002 - </option>
                                                        <option value="3">003 - </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="cuit" class="form-label">CUIT</label>
                                                    <input type="number" class="form-control" id="cuit">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="fecha" class="form-label">Fecha</label>
                                                    <input type="text" class="form-control vanila-datepicker">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="comprador" class="form-label">Comprador</label>
                                                    <input type="text" class="form-control" id="comprador">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label class="form-label">Tipo de pago</label>
                                                    <select class="form-select mb-3">
                                                        <option selected=""></option>
                                                        <option value="1">001 - </option>
                                                        <option value="2">002 - </option>
                                                        <option value="3">003 - </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <div class="form-check">
                                                        <p class="form-label">Pago anticipado</p>
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Si</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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