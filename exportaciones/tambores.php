<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Nuevo lote</title>
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
                                    <img src="../assets/images/barrel.svg" alt="icono-contratos-activos">
                                </div>
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <h1 class="ms-2 mb-0 mt-2">Tambores</h1>
                                    <p class="ms-2">Contrato N°: PC11999</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 mt-2 d-flex justify-content-between">
                        <div class="col">
                            <a href="javascript:history.back()" class="btn btn-primary">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.83828 7.64785C3.88472 7.6013 3.93989 7.56436 4.00063 7.53915C4.06137 7.51395 4.12648 7.50098 4.19224 7.50098C4.258 7.50098 4.32311 7.51395 4.38385 7.53915C4.44459 7.56436 4.49976 7.6013 4.5462 7.64785L10.1915 13.2942L15.8369 7.64785C15.8834 7.60137 15.9385 7.5645 15.9993 7.53934C16.06 7.51419 16.1251 7.50124 16.1908 7.50124C16.2566 7.50124 16.3217 7.51419 16.3824 7.53934C16.4431 7.5645 16.4983 7.60137 16.5448 7.64785C16.5913 7.69434 16.6281 7.74952 16.6533 7.81025C16.6785 7.87098 16.6914 7.93608 16.6914 8.00181C16.6914 8.06755 16.6785 8.13264 16.6533 8.19337C16.6281 8.2541 16.5913 8.30929 16.5448 8.35577L10.5455 14.3551C10.4991 14.4016 10.4439 14.4386 10.3831 14.4638C10.3224 14.489 10.2573 14.5019 10.1915 14.5019C10.1258 14.5019 10.0607 14.489 9.99993 14.4638C9.93919 14.4386 9.88402 14.4016 9.83758 14.3551L3.83828 8.35577C3.79173 8.30933 3.75479 8.25416 3.72958 8.19342C3.70438 8.13268 3.69141 8.06757 3.69141 8.00181C3.69141 7.93605 3.70438 7.87094 3.72958 7.8102C3.75479 7.74946 3.79173 7.69429 3.83828 7.64785Z"
                                        fill="white" />
                                </svg>
                                Volver al listado
                            </a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <a href="detalle-lote.php" class="btn btn-primary" target="_blanck">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.96684 1V13" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M13 6.9579H1" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                Crear lote
                            </a>
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
                <div class="col-12 mt-5">
                    <?php include 'includes/filters-homogeneizacion.php';?>
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
                                            <th class="text-center"></th>
                                            <th class="text-center">Tambor</th>
                                            <th class="text-center">Estado</th>
                                            <th class="text-center">HMF</th>
                                            <th class="text-center">Color</th>
                                            <th class="text-center">Humedad</th>
                                            <th class="text-center">Kg Bruto</th>
                                            <th class="text-center">Kg Tara</th>
                                            <th class="text-center">Kg Neto</th>
                                            <th class="text-center">Solidificacion</th>
                                            <th class="text-center">AM I</th>
                                            <th class="text-center">AM II</th>
                                            <th class="text-center">Glifosato</th>
                                            <th class="text-center">FG</th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label>
                                            </td>
                                            <td class="text-center">324,923</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">293</td>
                                            <td class="text-center">16,5</td>
                                            <td class="text-center">276,5</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label>
                                            </td>
                                            <td class="text-center">324,923</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">293</td>
                                            <td class="text-center">16,5</td>
                                            <td class="text-center">276,5</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label>
                                            </td>
                                            <td class="text-center">324,924</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">296</td>
                                            <td class="text-center">16</td>
                                            <td class="text-center">282,5</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label>
                                            </td>
                                            <td class="text-center">324,925</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">279,5</td>
                                            <td class="text-center">18</td>
                                            <td class="text-center">259,5</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label>
                                            </td>
                                            <td class="text-center">324,926</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">300,5</td>
                                            <td class="text-center">16,5</td>
                                            <td class="text-center">284</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label>
                                            </td>
                                            <td class="text-center">324,927</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">302,5</td>
                                            <td class="text-center">16,5</td>
                                            <td class="text-center">295</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">
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
                                            <td class="text-center">ND</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label>
                                            </td>
                                            <td class="text-center">324,928</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">309,5</td>
                                            <td class="text-center">16,5</td>
                                            <td class="text-center">298</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label>
                                            </td>
                                            <td class="text-center">324,929</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">310,5</td>
                                            <td class="text-center">16</td>
                                            <td class="text-center">294,5</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label>
                                            </td>
                                            <td class="text-center">324,930</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">304,5</td>
                                            <td class="text-center">16,5</td>
                                            <td class="text-center">287</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label>
                                            </td>
                                            <td class="text-center">324,931</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">291</td>
                                            <td class="text-center">18</td>
                                            <td class="text-center">279,5</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center">
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
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label> 
                                            </td>
                                            <td class="text-center">324,932</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">302,5</td>
                                            <td class="text-center">18</td>
                                            <td class="text-center">287</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label>
                                            </td>
                                            <td class="text-center">324,933</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">290</td>
                                            <td class="text-center">16,5</td>
                                            <td class="text-center">274,5</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"></label>
                                            </td>
                                            <td class="text-center">324,934</td>
                                            <td class="text-center">Aprobado</td>
                                            <td class="text-center">2,0</td>
                                            <td class="text-center">31 mm</td>
                                            <td class="text-center">15,5%</td>
                                            <td class="text-center">290</td>
                                            <td class="text-center">16,5</td>
                                            <td class="text-center">274,5</td>
                                            <td class="text-center">Liquida</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center">ND</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">Carmisia</td>
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