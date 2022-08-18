<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Tambores incluidos</title>
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
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="homogeneizacion-fraccionado.php">Lotes homogeneizados</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambores incluidos</li>
                                </ol>
                            </nav>  
                            <div class="d-flex align-items-center">
                                <div class="box-img">
                                    <img src="../assets/images/icon-tambor.svg" alt="" width="80%">
                                </div>
                                <h1 class="ms-2 mb-0">Tambores incluidos</h1>
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
                                                    <th class="d-flex justify-content-center">Tambor</th>
                                                    <th>Tara</th>
                                                    <th>Bruto</th>
                                                    <th>Neto</th>
                                                    <th>Observaciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="d-flex justify-content-center">1</td>
                                                    <td>15 kg</td>
                                                    <td>320 kg</td>
                                                    <td>335 kg</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex justify-content-center">1</td>
                                                    <td>15 kg</td>
                                                    <td>320 kg</td>
                                                    <td>335 kg</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex justify-content-center">1</td>
                                                    <td>15 kg</td>
                                                    <td>320 kg</td>
                                                    <td>335 kg</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex justify-content-center">1</td>
                                                    <td>15 kg</td>
                                                    <td>320 kg</td>
                                                    <td>335 kg</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex justify-content-center">1</td>
                                                    <td>15 kg</td>
                                                    <td>320 kg</td>
                                                    <td>335 kg</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td class="d-flex justify-content-center">1</td>
                                                    <td>15 kg</td>
                                                    <td>320 kg</td>
                                                    <td>335 kg</td>
                                                    <td>-</td>
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