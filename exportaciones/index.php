<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Dashboard</title>
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
                                <!-- <div class="box-img">
                                    <img src="../assets/images/icon-home-01.svg" alt="" width="50%">
                                </div> -->
                                <h1 class="ms-2 mb-0">Bienvenido/a nuevamente</h1>
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
                <div class="col-md-6 col-lg-6">
                    <div class="overflow-hidden d-slider1">
                        <ul class="mb-2 swiper-wrapper list-inline">
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                <div class="card-body d-flex align-items-center justify-content-around">
                                    <div class="progress-detail">
                                        <h4 class="counter fw-bolder">85</h4>
                                        <p class="mb-0">Conte nedores exportados</p>
                                        <a href="ordenes-compra-pendiente.php"
                                            class="d-flex align-items-center btn-link">Ver todos
                                            <svg class="ms-2" width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.58579 6L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893C0.683418 -0.0976305 1.31658 -0.0976305 1.70711 0.292893L6.70711 5.29289C7.09763 5.68342 7.09763 6.31658 6.70711 6.70711L1.70711 11.7071C1.31658 12.0976 0.683418 12.0976 0.292893 11.7071C-0.0976311 11.3166 -0.0976311 10.6834 0.292893 10.2929L4.58579 6Z"
                                                    fill="#8A92A6" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex align-self-end">
                                        <img src="../assets/images/icon-advertencia.svg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                <div class="card-body d-flex align-items-center justify-content-around">
                                    <div class="progress-detail">
                                        <h4 class="counter fw-bolder">25</h4>
                                        <p class="mb-0">Contratos pendientes</p>
                                        <a href="ordenes-compra-entregada.php"
                                            class="d-flex align-items-center btn-link">Ver todos
                                            <svg class="ms-2" width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.58579 6L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893C0.683418 -0.0976305 1.31658 -0.0976305 1.70711 0.292893L6.70711 5.29289C7.09763 5.68342 7.09763 6.31658 6.70711 6.70711L1.70711 11.7071C1.31658 12.0976 0.683418 12.0976 0.292893 11.7071C-0.0976311 11.3166 -0.0976311 10.6834 0.292893 10.2929L4.58579 6Z"
                                                    fill="#8A92A6" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex align-self-end">
                                        <img src="../assets/images/icon-check.svg" alt="">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="swiper-button swiper-button-next"></div>
                        <div class="swiper-button swiper-button-prev"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="p-4 rounded border-0 card" data-aos="fade-up" data-aos-delay="600">
                        <h5 class="mb-4">Notificaciones</h5>
                        <div class="p-0 d-flex flex-row">
                            <a href="#" class="btn-link d-flex align-items-center mb-3">
                                <img src="../assets/images/shapes/alert.svg">
                                <p class="ms-3 mb-0">Lote N°1325 salio del depósito</p>
                            </a>
                            <a href="#" class="btn-link d-flex align-items-center mb-3 ps-4">
                                <img src="../assets/images/shapes/alert.svg">
                                <p class="ms-3 mb-0 ">Lote N°1325 salio del depósito</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="d-flex justify-content-between align-items-center mb-3" data-aos="fade-up"
                        data-aos-delay="600">
                        <h2 class="mb-0 fs-4">Ultimos contratos abiertos</h2>
                        <a href="ordenes-compra-pendiente.php" class="d-flex align-items-center justify-content-end btn-link">Ver todos
                        <svg class="ms-2" width="7" height="12" viewBox="0 0 7 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.58579 6L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893C0.683418 -0.0976305 1.31658 -0.0976305 1.70711 0.292893L6.70711 5.29289C7.09763 5.68342 7.09763 6.31658 6.70711 6.70711L1.70711 11.7071C1.31658 12.0976 0.683418 12.0976 0.292893 11.7071C-0.0976311 11.3166 -0.0976311 10.6834 0.292893 10.2929L4.58579 6Z"
                                fill="#8A92A6" />
                        </svg>
                    </a>
                    </div>
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
                                            <th class="text-center">C.totales</th>
                                            <th class="text-center">C.restantes</th>
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
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center me-4">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
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
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center me-4">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
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
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center me-4">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
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
                                                    <a href="tambores.php" class="btn btn-secondary">
                                                        Lotear
                                                    </a>
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center me-4">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
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
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center me-4">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
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
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center me-4">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
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
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center me-4">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
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
                                                    <a href="lotes.php"
                                                        class="d-flex align-items-center justify-content-center me-4">
                                                        <img src="../assets/images/icon-edit.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Editar orden">
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