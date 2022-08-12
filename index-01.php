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
                                <img src="assets/images/icon-home-01.svg" alt="" width="60px">
                                <h1 class="ms-2 mb-0">Bienvenido/a Nuevamente</h1>
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
                <div class="col-md-12 col-lg-8">
                    <div class="overflow-hidden d-slider1">
                        <ul class="mb-2 swiper-wrapper list-inline">
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                <div class="card-body d-flex align-items-center justify-content-around">
                                    <div class="progress-detail">
                                        <h4 class="counter">85</h4>
                                        <p class="mb-0">Ordenes Pendientes</p>
                                        <a href="#" class="d-flex align-items-center btn-link">Ver todos
                                            <svg class="ms-2" width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.58579 6L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893C0.683418 -0.0976305 1.31658 -0.0976305 1.70711 0.292893L6.70711 5.29289C7.09763 5.68342 7.09763 6.31658 6.70711 6.70711L1.70711 11.7071C1.31658 12.0976 0.683418 12.0976 0.292893 11.7071C-0.0976311 11.3166 -0.0976311 10.6834 0.292893 10.2929L4.58579 6Z"
                                                    fill="#8A92A6" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex align-self-end">
                                        <img src="assets/images/icon-advertencia.svg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                <div class="card-body d-flex align-items-center justify-content-around">
                                    <div class="progress-detail">
                                        <h4 class="counter">85</h4>
                                        <p class="mb-0">Ordenes Pagas</p>
                                        <a href="#" class="d-flex align-items-center btn-link">Ver todos
                                            <svg class="ms-2" width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.58579 6L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893C0.683418 -0.0976305 1.31658 -0.0976305 1.70711 0.292893L6.70711 5.29289C7.09763 5.68342 7.09763 6.31658 6.70711 6.70711L1.70711 11.7071C1.31658 12.0976 0.683418 12.0976 0.292893 11.7071C-0.0976311 11.3166 -0.0976311 10.6834 0.292893 10.2929L4.58579 6Z"
                                                    fill="#8A92A6" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex align-self-end">
                                        <img src="assets/images/icon-check.svg" alt="">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="swiper-button swiper-button-next"></div>
                        <div class="swiper-button swiper-button-prev"></div>
                    </div>

                    <div class="col-md-12" id="search">
                        <h2 class="mb-3">Estado de órdenes activas</h2>
                        <div class="card card-body rounded-pill d-flex justify-content-around text-center py-3">
                            <div class="input-group search-input">
                                <input type="search" class="form-control" placeholder="Buscar órden de compra">
                                <svg class="ms-3" width="20px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="#F16A1B" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></circle>
                                    <path d="M18.0186 18.4851L21.5426 22" stroke="#F16A1B" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                        <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
                            <div class="p-0 card-body">
                                <div class="table-responsive">
                                    <table id="table table-responsive" class="table mb-0 table-striped" role="grid">
                                        <thead>
                                            <tr>
                                                <th>N °de Orden</th>
                                                <th>Estado</th>
                                                <th>Ubicación</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6>OC2356</h6>
                                                </td>
                                                <td>
                                                    <div class="progressbullet">
                                                        <div class="bar">
                                                            <div class="bar__fill" style="width: 66%;"></div>
                                                        </div>
                                                        <div class="point point--active">
                                                            <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="Treansporte">
                                                            </div>
                                                        </div>
                                                        <div class="point point--active">
                                                            <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="Depósito">
                                                            </div>
                                                        </div>
                                                        <div class="point point--active">
                                                            <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="Laboratorio">
                                                            </div>
                                                        </div>
                                                        <div class="point">
                                                            <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="Venta">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>En laboratorio</td>
                                                <td class="d-flex justify-content-end"><a href="#"
                                                        class="btn btn-primary">VER</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>OC2356</h6>
                                                </td>
                                                <td>
                                                    <div class="progressbullet">
                                                        <div class="bar">
                                                            <div class="bar__fill" style="width: 33%;"></div>
                                                        </div>
                                                        <div class="point point--active">
                                                            <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="Treansporte">
                                                            </div>
                                                        </div>
                                                        <div class="point point--active">
                                                            <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="Depósito">
                                                            </div>
                                                        </div>
                                                        <div class="point">
                                                            <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="Laboratorio">
                                                            </div>
                                                        </div>
                                                        <div class="point">
                                                            <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="Venta">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>En depósito</td>
                                                <td class="d-flex justify-content-end"><a href="#"
                                                        class="btn btn-primary">VER</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>OC2356</h6>
                                                </td>
                                                <td>
                                                    <div class="progressbullet">
                                                        <div class="bar">
                                                            <div class="bar__fill" style="width: 100%;"></div>
                                                        </div>
                                                        <div class="point point--active">
                                                            <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="Treansporte">
                                                            </div>
                                                        </div>
                                                        <div class="point point--active">
                                                            <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="Depósito">
                                                            </div>
                                                        </div>
                                                        <div class="point point--active">
                                                            <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="Laboratorio">
                                                            </div>
                                                        </div>
                                                        <div class="point point--active">
                                                            <div class="bullet" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="Venta">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>En transporte</td>
                                                <td class="d-flex justify-content-end"><a href="#"
                                                        class="btn btn-primary">VER</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="p-4 rounded border-0 card-notificaciones" data-aos="fade-up"
                                data-aos-delay="900">
                                <h5 class="mb-4">Notificaciones</h5>
                                <div class="p-0">
                                    <a href="#" class="btn-link d-flex align-items-center mb-3">
                                        <img src="assets/images/shapes/alert.svg">
                                        <p class="ms-3 mb-0">El tambor 2 de la OC 2315 fue observado.</p>
                                    </a>
                                    <a href="#" class="btn-link d-flex align-items-center mb-3">
                                        <img src="assets/images/shapes/money.svg">
                                        <p class="ms-3 mb-0 ">La OC 2253 fue pagada.</p>
                                    </a>
                                    <a href="#" class="btn-link d-flex align-items-center mb-3">
                                        <img src="assets/images/shapes/money.svg">
                                        <p class="ms-3 mb-0 ">La OC 2365 fue pagada.</p>
                                    </a>
                                    <a href="#" class="btn-link d-flex align-items-center mb-3">
                                        <img src="assets/images/shapes/alert.svg">
                                        <p class="ms-3 mb-0 ">El tambor 52 de la OC 362 fue observado.</p>
                                    </a>
                                    <a href="#" class="btn-link d-flex align-items-center mb-3">
                                        <img src="assets/images/shapes/shop.svg">
                                        <p class="ms-3 mb-0 ">Se ha modificado la equivalencia en Tambor nuevo.</p>
                                    </a>
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