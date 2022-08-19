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
                            <?php include 'includes/filters.php';?>
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