<div class="app-menu navbar-menu " >
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>


    <div id="scrollbar">
        <div class="container-fluid">
            <p>{{dd($categorias)}}</p>
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav" data-aos="zoom-out">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
               <!--ROPA -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="las la-tshirt "></i> <span data-key="t-dashboards">Ropa</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#hombre" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarProfile"> Hombre
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">


                                                <!-- aqui iria un bucle con el array pero estoy probando a imprimirlo primero -->
                                            <a href="pages-profile.html" class="nav-link">
                                                ETC... </a>
                                        </li>
                                            <!-- Fin del bucle -->
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#mujer" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarProfile"> Mujer
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                                <!-- aqui un bucle con lo de la bd -->
                                            <a href="pages-profile.html" class="nav-link">
                                                ETC... </a>
                                        </li>
                                            <!-- Fin del bucle -->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--ZAPATOS -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i class="las la-shoe-prints "></i> <span data-key="t-apps">Zapatos</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#hombre" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarProfile"> Hombre
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                                <!-- aqui un bucle con lo de la bd -->
                                            <a href="pages-profile.html" class="nav-link">
                                                ETC... </a>
                                        </li>
                                            <!-- Fin del bucle -->
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#mujer" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarProfile"> Mujer
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                                <!-- aqui un bucle con lo de la bd -->
                                            <a href="pages-profile.html" class="nav-link">
                                                ETC... </a>
                                        </li>
                                            <!-- Fin del bucle -->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                </li>
                <!-- COMPLEMENTOS -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="bx bx-glasses-alt "></i> <span data-key="t-layouts">Complementos</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#hombre" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarProfile"> Hombre
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                                <!-- aqui un bucle con lo de la bd -->
                                            <a href="pages-profile.html" class="nav-link">
                                                ETC... </a>
                                        </li>
                                            <!-- Fin del bucle -->
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#mujer" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarProfile"> Mujer
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                                <!-- aqui un bucle con lo de la bd -->
                                            <a href="pages-profile.html" class="nav-link">
                                                ETC... </a>
                                        </li>
                                            <!-- Fin del bucle -->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title"><i class="ri-more-fill"></i> <span
                        data-key="t-pages">Paginas</span></li>
                 <!--DEPORTE  -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarAuth">
                        <i class=" bx bx-football "></i> <span
                            data-key="t-authentication">Deporte</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#hombre" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarProfile"> Hombre
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                                <!-- aqui un bucle con lo de la bd -->
                                            <a href="pages-profile.html" class="nav-link">
                                                ETC... </a>
                                        </li>
                                            <!-- Fin del bucle -->
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#mujer" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarProfile"> Mujer
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                                <!-- aqui un bucle con lo de la bd -->
                                            <a href="pages-profile.html" class="nav-link">
                                                ETC... </a>
                                        </li>
                                            <!-- Fin del bucle -->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--STREETWEAR  -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i class="bx bxs-compass "></i> <span data-key="t-pages">Streetwear</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#hombre" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarProfile"> Hombre
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                                <!-- aqui un bucle con lo de la bd -->
                                            <a href="pages-profile.html" class="nav-link">
                                                ETC... </a>
                                        </li>
                                            <!-- Fin del bucle -->
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#mujer" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarProfile"> Mujer
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                                <!-- aqui un bucle con lo de la bd -->
                                            <a href="pages-profile.html" class="nav-link">
                                                ETC... </a>
                                        </li>
                                            <!-- Fin del bucle -->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                 <!--TENDENCIAS  -->
                <li class="nav-item">
                    <a class="nav-link menu-link" target="_blank" href="landing.html">
                        <i class=" ri-star-half-s-line "></i> <span data-key="t-landing">Tendencias </span>
                        <span class="badge badge-pill bg-danger" data-key="t-new">New</span>
                    </a>
                </li>
                <!-- MAS -->
                <!--SOBRE NOSOTROS  -->
                <li class="nav-item">
                    <a class="nav-link menu-link"  href="{{ route('ropaASOS') }}">
                        <i class="mdi mdi-shoe-formal"></i> <span data-key="t-landing">Zapatillas Asos </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link"  href="{{ route('ropaZapposHombre') }}">
                        <i class="mdi mdi-face-man"></i> <span data-key="t-landing">Zappos Hombre </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link"  href="{{ route('ropaZapposMujer') }}">
                        <i class="mdi mdi-face-woman"></i> <span data-key="t-landing">Zappos Mujer</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link"  href="{{ route('ropaZapposBuscador') }}">
                        <i class="ri ri-search-line "></i> <span data-key="t-landing">Buscador de Ariculos</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
