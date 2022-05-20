<div class="app-menu navbar-menu " >
    <!-- LOGO -->

    <div id="scrollbar">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav px-5" id="navbar-nav" data-aos="zoom-out">
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
                                        <!-- LLenando categorias -->
                                        @foreach ($categoriasRopa as $categoriaRopa)
                                        <li class="nav-item">
                                            {{-- {{route('ropa.show' , $categoriaRopa )}} --}}
                                            <a href="{{route('productosMasc' , $categoriaRopa )}}" class="nav-link">
                                                {{$categoriaRopa->nombrecategoria}} </a>
                                        </li>
                                        @endforeach
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
                                        <!-- LLenando categorias -->
                                        @foreach ($categoriasRopa as $categoriaRopa)
                                        <li class="nav-item">
                                            <a href="{{route('productosMasc' , $categoriaRopa )}}" class="nav-link">
                                                {{$categoriaRopa->nombrecategoria}} </a>
                                        </li>
                                        @endforeach
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

                                            <!-- LLenando categorias -->
                                            @foreach ($categoriasZapatos as $categoriaZapato)
                                            <li class="nav-item">

                                                <a href="{{route('productosMasc' , $categoriaZapato )}}" class="nav-link">
                                                    {{$categoriaZapato->nombrecategoria}} </a>
                                            </li>
                                            @endforeach
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
                                        <!-- LLenando categorias -->
                                        @foreach ($categoriasZapatos as $categoriaZapato)
                                        <li class="nav-item">
                                            <a href="{{route('productosMasc' , $categoriaZapato )}}" class="nav-link">
                                                {{$categoriaZapato->nombrecategoria}} </a>
                                        </li>
                                        @endforeach
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
                                          <!-- LLenando categorias -->
                                          @foreach ($categoriasAccesorios as $categoriasAccesorio)
                                          <li class="{{route('productosMasc' , $categoriasAccesorio )}}">
                                              <a href="pages-profile.html" class="nav-link">
                                                  {{$categoriasAccesorio->nombrecategoria}} </a>
                                          </li>
                                          @endforeach
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
                                           <!-- LLenando categorias -->
                                           @foreach ($categoriasAccesorios as $categoriasAccesorio)
                                           <li class="nav-item">
                                               <a href="{{route('productosMasc' , $categoriasAccesorio )}}" class="nav-link">
                                                   {{$categoriasAccesorio->nombrecategoria}} </a>
                                           </li>
                                           @endforeach
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
                                           <!-- LLenando categorias -->
                                           @foreach ($categoriasDeportes as $categoriasDeporte)
                                           <li class="nav-item">
                                               <a href="{{route('productosMasc' , $categoriasDeporte )}}" class="nav-link">
                                                   {{$categoriasDeporte->nombrecategoria}} </a>
                                           </li>
                                           @endforeach
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
                                               <!-- LLenando categorias -->
                                               @foreach ($categoriasDeportes as $categoriasDeporte)
                                               <li class="nav-item">
                                                   <a href="{{route('productosMasc' , $categoriasDeporte )}}" class="nav-link">
                                                       {{$categoriasDeporte->nombrecategoria}} </a>
                                               </li>
                                               @endforeach
                                                   <!-- Fin del bucle -->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                 <!--TENDENCIAS  -->
                <li class="nav-item">
                    <a class="nav-link menu-link"  href="landing.html">
                        <i class=" ri-star-half-s-line "></i> <span >Tendencias </span>
                        <span class="badge badge-pill bg-danger" >New</span>
                    </a>
                </li>
                <!--SOBRE NOSOTROS  -->
                <li class="nav-item">
                    <a class="nav-link menu-link"  href="landing.html">
                        <i class=" bx bxl-facebook-circle  "></i> <span d>Sobre Nosotros </span>

                    </a>
                </li>
                <!-- APIS -->
                <li class="nav-item">
                    <a class="nav-link menu-link"  href="{{ route('ropaASOS') }}">
                        <i class="mdi mdi-shoe-formal"></i> <span >Asos Zapatillas </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link"  href="{{ route('ropaZapposHombre') }}">
                        <i class="mdi mdi-face-man"></i> <span >Zappos Hombre </span>
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
