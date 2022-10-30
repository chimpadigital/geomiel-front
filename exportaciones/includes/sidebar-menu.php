<aside class="sidebar sidebar-default navs-rounded-all">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="index.php" class="navbar-brand">
            <!--Logo start-->
            <img src="../assets/images/geomiel-logo.svg" alt="Geomiel" height="44px">
            <!--logo End-->
        </a>
        <div class="sidebar-toggle d-md-block d-lg-none" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">
                        <span class="item-name">Inicio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#horizontal-menu-01" role="button"
                        aria-expanded="false" aria-controls="horizontal-menu-01">
                        <span class="item-name">Contratos</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="horizontal-menu-01" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="contratos-activos.php">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="#EEB899"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <span class="item-name">Activos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contratos-cerrados.php">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="#1AA053"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <span class="item-name">Cerrados</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#horizontal-menu-02" role="button"
                        aria-expanded="false" aria-controls="horizontal-menu-02">
                        <span class="item-name">Lotes totales</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="horizontal-menu-02" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="lotes-pendientes.php">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="#EEB899"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <span class="item-name">Pendientes</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lotes-consolidados.php">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="#1AA053"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <span class="item-name">Consolidados</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#horizontal-menu-03" role="button"
                        aria-expanded="false" aria-controls="horizontal-menu-03">
                        <span class="item-name">Homogeneizados</span>
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="horizontal-menu-03" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="homogeneizados-pendientes.php">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="#EEB899"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <span class="item-name">Pendientes</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="homogeneizados-mermas.php">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="#1AA053"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <span class="item-name">Mermas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="homogeneizados-consolidados.php">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="#EEB899"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <span class="item-name">Consolidados</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div> 
    <div class="sidebar-footer d-flex flex-column align-items-center">
        <img src="../assets/images/img-bee-menu.svg">
        <a href="index.php">
            <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2294_142710)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.592 12.4681C11.592 12.5998 11.5335 12.7261 11.4295 12.8192C11.3255 12.9123 11.1844 12.9646 11.0374 12.9646H2.16379C2.0167 12.9646 1.87564 12.9123 1.77163 12.8192C1.66763 12.7261 1.6092 12.5998 1.6092 12.4681V3.5306C1.6092 3.39891 1.66763 3.27262 1.77163 3.1795C1.87564 3.08639 2.0167 3.03407 2.16379 3.03407H11.0374C11.1844 3.03407 11.3255 3.08639 11.4295 3.1795C11.5335 3.27262 11.592 3.39891 11.592 3.5306V5.51672C11.592 5.6484 11.6504 5.7747 11.7544 5.86781C11.8584 5.96093 11.9995 6.01324 12.1465 6.01324C12.2936 6.01324 12.4347 5.96093 12.5387 5.86781C12.6427 5.7747 12.7011 5.6484 12.7011 5.51672V3.5306C12.7011 3.13554 12.5259 2.75666 12.2138 2.47731C11.9018 2.19795 11.4786 2.04102 11.0374 2.04102H2.16379C1.72253 2.04102 1.29934 2.19795 0.987314 2.47731C0.675292 2.75666 0.5 3.13554 0.5 3.5306L0.5 12.4681C0.5 12.8632 0.675292 13.2421 0.987314 13.5214C1.29934 13.8008 1.72253 13.9577 2.16379 13.9577H11.0374C11.4786 13.9577 11.9018 13.8008 12.2138 13.5214C12.5259 13.2421 12.7011 12.8632 12.7011 12.4681V10.482C12.7011 10.3503 12.6427 10.224 12.5387 10.1309C12.4347 10.0378 12.2936 9.98547 12.1465 9.98547C11.9995 9.98547 11.8584 10.0378 11.7544 10.1309C11.6504 10.224 11.592 10.3503 11.592 10.482V12.4681Z"
                        fill="#F16A1B" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M18.0851 8.35082C18.1368 8.3047 18.1777 8.2499 18.2057 8.18958C18.2336 8.12926 18.248 8.06459 18.248 7.99928C18.248 7.93397 18.2336 7.8693 18.2057 7.80897C18.1777 7.74865 18.1368 7.69386 18.0851 7.64773L14.7575 4.66856C14.6534 4.57533 14.5121 4.52295 14.3649 4.52295C14.2176 4.52295 14.0763 4.57533 13.9722 4.66856C13.8681 4.7618 13.8096 4.88825 13.8096 5.02011C13.8096 5.15196 13.8681 5.27841 13.9722 5.37165L16.3536 7.50275H6.6005C6.45341 7.50275 6.31234 7.55506 6.20834 7.64818C6.10433 7.7413 6.0459 7.86759 6.0459 7.99928C6.0459 8.13096 6.10433 8.25726 6.20834 8.35038C6.31234 8.44349 6.45341 8.49581 6.6005 8.49581H16.3536L13.9722 10.6269C13.8681 10.7201 13.8096 10.8466 13.8096 10.9784C13.8096 11.1103 13.8681 11.2368 13.9722 11.33C14.0763 11.4232 14.2176 11.4756 14.3649 11.4756C14.5121 11.4756 14.6534 11.4232 14.7575 11.33L18.0851 8.35082Z"
                        fill="#F16A1B" />
                </g>
                <defs>
                    <clipPath id="clip0_2294_142710">
                        <rect width="17.7471" height="15.8889" fill="white" transform="translate(0.5 0.0546875)" />
                    </clipPath>
                </defs>
            </svg>
            Cerrar sesión
        </a>
    </div>
</aside>