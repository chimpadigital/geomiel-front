<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Homogeneización</title>
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
                                    <img src="../assets/images/checkmark.svg" width="80%">
                                </div>
                                <h1 class="ms-2 mb-0">Homogeneizaciones analizadas</h1>
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
                            <?php include 'includes/filters-homogeneizacion.php';?>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
                                        <div class="p-0 card-body">
                                            <div class="table-responsive">
                                                <table id="table table-responsive" class="table mb-0 table-striped"
                                                    data-toggle="data-table" role="grid">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Lotes Exp</th>
                                                            <th class="text-center">Unidades</th>
                                                            <th class="text-center">Kilos de miel</th>
                                                            <th class="text-center"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">10973</td>
                                                            <td class="text-center">50</td>
                                                            <td class="text-center">84646 kg</td>
                                                            <td class="text-center">
                                                                <div>
                                                                    <a href="tambores-incluidos.php" class="btn btn-secondary px-5">
                                                                        Ver análisis
                                                                    </a>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">10973</td>
                                                            <td class="text-center">50</td>
                                                            <td class="text-center">84646 kg</td>
                                                            <td class="text-center">
                                                                <div>
                                                                    <a href="tambores-incluidos.php" class="btn btn-secondary px-5">
                                                                        Ver análisis
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">10973</td>
                                                            <td class="text-center">50</td>
                                                            <td class="text-center">84646 kg</td>
                                                            <td class="text-center">
                                                                <div>
                                                                    <a href="tambores-incluidos.php" class="btn btn-secondary px-5">
                                                                        Ver análisis
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
            </div>
        </div>
    </main>

    <?php include 'includes/script.php';?>
</body>

</html>