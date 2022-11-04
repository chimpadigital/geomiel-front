<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Lotes homogeneizados</title>
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
                                <h1 class="ms-2 mb-0">Lotes homogeneizados</h1>
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
                <div class="col-12">
                    <?php include 'includes/filters-lote.php';?>
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
                                            <th class="text-center">N° Lote</th>
                                            <th class="text-center">N° Contrato</th>
                                            <th class="text-center">Tambores</th>
                                            <th class="text-center">Kg Neto</th>
                                            <th class="text-center">Color</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">GEO H 2021 - 324</td>
                                            <td class="text-center">BEAU 206072-6</td>
                                            <td class="text-center">55</td>
                                            <td class="text-center">20.000</td>
                                            <td class="text-center">31 mm</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                <a href="detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
                                                    </a>
                                                    <a href="contratos-activos.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-download.svg"
                                                            alt="icono-descarga">
                                                    </a>                                                   
                                                    <div class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#ventanaExito">
                                                        Asignar contrato
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO H 2021 - 328</td>
                                            <td class="text-center">HLXU 126995-3</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">18.954</td>
                                            <td class="text-center">32 mm</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                <a href="detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
                                                    </a>
                                                    <a href="contratos-activos.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-download.svg"
                                                            alt="icono-descarga">
                                                    </a>                                                    
                                                    <div class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#ventanaExito">
                                                        Asignar contrato
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2021 - 304</td>
                                            <td class="text-center">MEDU 293828-9</td>
                                            <td class="text-center">64</td>
                                            <td class="text-center">5.263</td>
                                            <td class="text-center">32 mm</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                <a href="detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
                                                    </a>
                                                    <a href="contratos-activos.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-download.svg"
                                                            alt="icono-descarga">
                                                    </a>
                                                    <div class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#ventanaExito">
                                                        Asignar contrato
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2022 - 306</td>
                                            <td class="text-center">MEDU 293828-9</td>
                                            <td class="text-center">48</td>
                                            <td class="text-center">13.874</td>
                                            <td class="text-center">32 mm</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                <a href="detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
                                                    </a>
                                                    <a href="contratos-activos.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-download.svg"
                                                            alt="icono-descarga">
                                                    </a>
                                                    <div class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#ventanaExito">
                                                        Asignar contrato
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2021 - 305</td>
                                            <td class="text-center">HLXU 126401-5 </td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">18.457</td>
                                            <td class="text-center">32 mm</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                <a href="detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
                                                    </a>
                                                    <a href="contratos-activos.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-download.svg"
                                                            alt="icono-descarga">
                                                    </a>
                                                    <div class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#ventanaExito">
                                                        Asignar contrato
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2022 - 307</td>
                                            <td class="text-center">UACU 369898-9</td>
                                            <td class="text-center">55</td>
                                            <td class="text-center">8.754</td>
                                            <td class="text-center">32 mm</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                <a href="detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
                                                    </a>
                                                    <a href="contratos-activos.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-download.svg"
                                                            alt="icono-descarga">
                                                    </a>
                                                    <div class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#ventanaExito">
                                                        Asignar contrato
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2022 - 308</td>
                                            <td class="text-center">HLBU 110737-0</td>
                                            <td class="text-center">61</td>
                                            <td class="text-center">3.541</td>
                                            <td class="text-center">32 mm</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                <a href="detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
                                                    </a>
                                                    <a href="contratos-activos.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-download.svg"
                                                            alt="icono-descarga">
                                                    </a>
                                                    <div class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#ventanaExito">
                                                        Asignar contrato
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">GEO G 2022 - 308</td>
                                            <td class="text-center">HLBU 110737-0</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">16.845</td>
                                            <td class="text-center">32 mm</td>
                                            <th>
                                                <div class="d-flex justify-content-evenly">
                                                <a href="detalle.php" target="_blanck"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-eye.svg" width="18px"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Ver lote">
                                                    </a>
                                                    <a href="contratos-activos.php"
                                                        class="d-flex align-items-center justify-content-center">
                                                        <img src="../assets/images/icon-download.svg"
                                                            alt="icono-descarga">
                                                    </a>
                                                    <div class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#ventanaExito">
                                                        Asignar contrato
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Total</td>
                                            <td></td>
                                            <td class="text-center">443</td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">105.688</td>
                                            <th></th>
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

        <div class="modal fade" id="ventanaExito" tabindex="-1" aria-labelledby="ventanaExitoLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl card card-body">
             <div class="modal-content">
             <div class="modal-body py-5">
                    <div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mt-4">
                        <h5>LOTE GEO-H-2022-123</h5>
                    </div>
                    <div class="card p-3">
                        <div class="row">
                            <p>Contrato</p>
                        </div>
                        <hr class="mt-0 mb-3">
                        <div class="row mt-2">
                            <div class="col-md-6 d-flex flex-column mb-3">
                                <label class="form-label">Contrato</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <img src="../assets/images/icon-input-proveedor.svg" alt="">
                                    </span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3 d-flex flex-column mb-3">
                                <p class="form-label">Cliente</p>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <img src="../assets/images/icon-input-proveedor.svg" alt="">
                                    </span>
                                    <span class="ms-2 mt-2">John Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex flex-column mb-3">
                                <p class="form-label">Destino</p>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3326_45578)">
                                                <rect width="20" height="20" transform="translate(0 0.5)" fill="white"
                                                    fill-opacity="0.01" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M19.7732 0.642982C19.8448 0.701652 19.9024 0.775481 19.942 0.859138C19.9815 0.942795 20.002 1.03419 20.002 1.12673V18.6267C20.0019 18.7712 19.9518 18.9111 19.8601 19.0228C19.7685 19.1344 19.6411 19.2109 19.4995 19.2392L13.2495 20.4892C13.1686 20.5053 13.0853 20.5053 13.0045 20.4892L6.87695 19.2642L0.749453 20.4892C0.658814 20.5073 0.565285 20.5051 0.475604 20.4828C0.385923 20.4604 0.302323 20.4184 0.230827 20.3598C0.159332 20.3012 0.10172 20.2275 0.0621428 20.144C0.0225659 20.0604 0.00200894 19.9692 0.00195312 19.8767V2.37673C0.00204035 2.2323 0.0521483 2.09235 0.143757 1.98069C0.235366 1.86903 0.362822 1.79254 0.504453 1.76423L6.75445 0.514232C6.83532 0.498069 6.91859 0.498069 6.99945 0.514232L13.127 1.73923L19.2545 0.514232C19.3451 0.496002 19.4386 0.498094 19.5283 0.520357C19.618 0.54262 19.7016 0.584501 19.7732 0.642982V0.642982ZM12.502 2.88923L7.50195 1.88923V18.1142L12.502 19.1142V2.88923ZM13.752 19.1142L18.752 18.1142V1.88923L13.752 2.88923V19.1142ZM6.25195 18.1142V1.88923L1.25195 2.88923V19.1142L6.25195 18.1142Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3326_45578">
                                                    <rect width="20" height="20" fill="white"
                                                        transform="translate(0 0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </span>
                                    <span class="ms-2 mt-2">John Doe</span>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex flex-column mb-3">
                                <p class="form-label">Color</p>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2198_153818)">
                                                <path
                                                    d="M8.08576 5.1875C7.88667 5.1875 7.68953 5.15113 7.5056 5.08046C7.32167 5.00978 7.15454 4.9062 7.01377 4.77562C6.87299 4.64504 6.76132 4.49001 6.68513 4.3194C6.60894 4.14878 6.56973 3.96592 6.56973 3.78125C6.56973 3.59658 6.60894 3.41372 6.68513 3.2431C6.76132 3.07249 6.87299 2.91746 7.01377 2.78688C7.15454 2.6563 7.32167 2.55272 7.5056 2.48204C7.68953 2.41137 7.88667 2.375 8.08576 2.375C8.48784 2.375 8.87344 2.52316 9.15775 2.78688C9.44206 3.0506 9.60179 3.40829 9.60179 3.78125C9.60179 4.15421 9.44206 4.5119 9.15775 4.77562C8.87344 5.03934 8.48784 5.1875 8.08576 5.1875ZM4.04302 8C3.64094 8 3.25533 7.85184 2.97102 7.58812C2.68671 7.3244 2.52699 6.96671 2.52699 6.59375C2.52699 6.22079 2.68671 5.8631 2.97102 5.59938C3.25533 5.33566 3.64094 5.1875 4.04302 5.1875C4.44509 5.1875 4.8307 5.33566 5.11501 5.59938C5.39932 5.8631 5.55905 6.22079 5.55905 6.59375C5.55905 6.96671 5.39932 7.3244 5.11501 7.58812C4.8307 7.85184 4.44509 8 4.04302 8ZM10.6125 7.0625C10.6125 7.43546 10.7722 7.79315 11.0565 8.05687C11.3408 8.32059 11.7264 8.46875 12.1285 8.46875C12.5306 8.46875 12.9162 8.32059 13.2005 8.05687C13.4848 7.79315 13.6445 7.43546 13.6445 7.0625C13.6445 6.68954 13.4848 6.33185 13.2005 6.06813C12.9162 5.80441 12.5306 5.65625 12.1285 5.65625C11.7264 5.65625 11.3408 5.80441 11.0565 6.06813C10.7722 6.33185 10.6125 6.68954 10.6125 7.0625ZM10.1071 12.6875C9.70506 12.6875 9.31945 12.5393 9.03514 12.2756C8.75083 12.0119 8.5911 11.6542 8.5911 11.2812C8.5911 10.9083 8.75083 10.5506 9.03514 10.2869C9.31945 10.0232 9.70506 9.875 10.1071 9.875C10.5092 9.875 10.8948 10.0232 11.1791 10.2869C11.4634 10.5506 11.6232 10.9083 11.6232 11.2812C11.6232 11.6542 11.4634 12.0119 11.1791 12.2756C10.8948 12.5393 10.5092 12.6875 10.1071 12.6875Z"
                                                    fill="white" />
                                                <path
                                                    d="M-7.62939e-05 8C-7.62939e-05 10.9531 1.88586 10.4234 3.60504 9.94063C4.62886 9.65281 5.59407 9.38094 6.06404 9.875C6.67348 10.5153 6.54411 11.5803 6.41879 12.6125C6.2399 14.0891 6.06808 15.5 8.08541 15.5C9.68457 15.5 11.2478 15.0601 12.5775 14.236C13.9071 13.4119 14.9435 12.2406 15.5554 10.8701C16.1674 9.49968 16.3275 7.99168 16.0155 6.53683C15.7036 5.08197 14.9335 3.7456 13.8027 2.6967C12.6719 1.64781 11.2312 0.933503 9.66281 0.644114C8.09438 0.354725 6.46866 0.50325 4.99123 1.07091C3.5138 1.63856 2.25102 2.59986 1.36257 3.83323C0.474129 5.0666 -7.62939e-05 6.51664 -7.62939e-05 8ZM8.08541 14.5625C7.46788 14.5625 7.42442 14.4022 7.42341 14.3975C7.34458 14.2606 7.29808 13.9625 7.35266 13.3484C7.36681 13.1909 7.39006 13.0016 7.41431 12.7944C7.46687 12.3594 7.52751 11.8522 7.53358 11.4238C7.54368 10.7609 7.44969 9.91438 6.82205 9.25438C6.44911 8.86344 5.96802 8.7125 5.53646 8.675C5.12814 8.63938 4.71578 8.69938 4.36406 8.7725C4.0174 8.84469 3.65456 8.94688 3.32811 9.03875L3.29981 9.04625C2.95012 9.14469 2.63478 9.23282 2.33663 9.29563C1.67665 9.43438 1.42297 9.37344 1.33504 9.31813C1.29663 9.29375 1.01061 9.08844 1.01061 8C1.01061 6.70206 1.42554 5.43327 2.20293 4.35407C2.98032 3.27488 4.08525 2.43374 5.378 1.93704C6.67075 1.44034 8.09326 1.31038 9.46563 1.5636C10.838 1.81682 12.0986 2.44183 13.088 3.35961C14.0775 4.2774 14.7513 5.44672 15.0243 6.71972C15.2973 7.99272 15.1571 9.31222 14.6217 10.5114C14.0862 11.7105 13.1794 12.7354 12.016 13.4565C10.8525 14.1776 9.48467 14.5625 8.08541 14.5625Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2198_153818">
                                                    <rect width="16.171" height="15" fill="white"
                                                        transform="matrix(-1 0 0 1 16.1709 0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="ms-2 mt-2">31 mm</span>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex flex-column mb-3">
                                <p class="form-label">Fecha de embarque</p>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <img src="../assets/images/calendario.svg" alt="">
                                    </span>
                                    <span class="ms-2 mt-2">31 mm</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-end">
                            <div class="col-5 btn btn-primary">Agregar contrato</div>
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