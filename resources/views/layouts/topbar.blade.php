<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header m-0">

            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="{{ route('dashboard') }}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/proyecto/logoMiEmpresa.png" alt="" height="25"> Fashzoco
                        </span>
                    </a>

                    <a href="{{ route('dashboard') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/proyecto/logoMiEmpresa.png" alt="" height="25"> Fashzoco
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-md-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Que buscas?"
                            id="busqueda" value="">
                        <span class="mdi mdi-magnify search-widget-icon"></span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                            id="search-close-options"></span>
                    </div>

                </form>
                <!-- fin search -->


            </div>

            <div class="d-flex align-items-center">
                {{-- <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
{{--
                <div class="dropdown ms-1 topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="header-lang-img" src="assets/images/flags/us.svg" alt="Header Language" height="20"
                            class="rounded">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en"
                            title="English">
                            <img src="assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">English</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp"
                            title="Spanish">
                            <img src="assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded"
                                height="18">
                            <span class="align-middle">Española</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr"
                            title="German">
                            <img src="assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded"
                                height="18"> <span class="align-middle">Deutsche</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it"
                            title="Italian">
                            <img src="assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded"
                                height="18">
                            <span class="align-middle">Italiana</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru"
                            title="Russian">
                            <img src="assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded"
                                height="18">
                            <span class="align-middle">русский</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch"
                            title="Chinese">
                            <img src="assets/images/flags/china.svg" alt="user-image" class="me-2 rounded"
                                height="18">
                            <span class="align-middle">中国人</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr"
                            title="French">
                            <img src="assets/images/flags/french.svg" alt="user-image" class="me-2 rounded"
                                height="18">
                            <span class="align-middle">français</span>
                        </a>
                    </div>
                </div> --}}

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Recomendaciones</span>
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-category-alt fs-22 text-danger'></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                        <div class="p-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" target="_blank" href="https://es.aliexpress.com/af/category/204000316.html?categoryBrowse=y&origin=n&CatId=204000316&catName=men-clothing">
                                        <img src="assets/images/aliexpress.png" alt="Aliexpress" width="40" height="40">
                                        <span>Aliexpress</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" target="_blank" href="https://spanish.alibaba.com/g/clothing.html">
                                        <img src="assets/images/alibaba.png" alt="Alibaba" width="40" height="40">
                                        <span>Alibaba</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" target="_blank" href="https://www.ebay.es/b/Ropa-calzado-y-complementos/11450/bn_16588177">
                                        <img src="assets/images/ebay.png" alt="Ebay" width="40" height="40">
                                        <span>Ebay</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" target="_blank" href="https://es.dhgate.com/wholesale/apparel/c014.html?dspm=pces.sp.categories.1.lWZSxt99Jb3xmlswavWJ&resource_id=#listing_category-014">
                                        <img src="assets/images/dhgate.png" alt="DHGATE" width="40" height="40">
                                        <span>DHGATE</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" target="_blank" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjihbCCweb3AhUFIcUKHQulCKwQFnoECBAQAQ&url=https%3A%2F%2Fes-es.facebook.com%2Fmarketplace%2Fcategory%2Fapparel%2F&usg=AOvVaw0i3H34DIIJbCB8XfynJf5I">
                                        <img src="assets/images/facebook.png" alt="Facebook Market" width="40"
                                            height="40">
                                        <span>Facebook Market</span>
                                    </a>
                                </div>
                                <div class="col">
                                    {{--  --}}
                                    <a class="dropdown-icon-item" target="_blank" href="https://www.zalando.es">
                                        <img src="assets/images/zalando.png" alt="Zalando" width="40"
                                            height="40">
                                        <span>Zalando</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCTOS O TICKET -->
                @if (Auth::User()->escomprador==0)
                <!-- comprador -->
                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Mis Tickets</span>
                <div class="ms-1 header-item d-none d-sm-flex">
                    <!-- RUTA TICKETS -->
                    <a  href="{{route('mostrartickets' , Auth::User()->id)}}">
                       
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle ">
                        <i class='ri-file-list-3-line fs-22 text-primary'></i>
                    </button>
                </a>
                </div>
                @else
                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Mis Productos</span>
                <div class="ms-1 header-item d-none d-sm-flex">
                    <!-- RUTA PRODUCTOS -->
                    <a  href="misproctos.html">
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle ">
                        <i class=' ri-archive-drawer-line fs-22 text-primary'></i>
                    </button>
                </a>
                </div>
                @endif


<!-- fullscreen -->
                <div class="ms-1 header-item d-none d-sm-flex">
                    <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Pantalla completa</span>
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22 text-secondary'></i>
                    </button>
                </div>
<!-- pantalla oscura y clara -->
                <div class="ms-1 header-item d-none d-sm-flex">
                    <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Cambiar Aspecto</span>
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22 text-warning'></i>
                    </button>
                </div>
                <!-- mapas -->
                <div class="ms-1 header-item d-none d-sm-flex">
                    <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Tiendas en tu zona</span>
                    <a  href="{{ route('mapaTiendas') }}">
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='ri-earth-line fs-22 text-success'></i>
                    </button>
                </a>

                </div>

                <!-- collumna del usuario con su foto y titulo -->
                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            @if (Auth::user()->profile_photo_url != '')
                                <img class="rounded-circle header-profile-user"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="Header Avatar">
                            @else
                                <img class="rounded-circle header-profile-user"
                                    src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" alt="Header Avatar">
                            @endif
                            <span class="text-start ms-xl-2">
                                <span
                                    class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                                    @if (Auth::User()->escomprador==0)
                                    <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Comprador</span>
                                    @else
                                    <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Vendedor</span>
                                    @endif

                            </span>
                        </span>
                    </button>
                    <!-- dropdown del admin -->
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <h6 class="dropdown-header">{{ Auth::user()->name }} </h6>
                            <a class="dropdown-item" href="{{ route('panelUsuario') }}"><i
                                    class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>
                                <span class="align-middle">Mi Cuenta</span></a>

                            <a class="dropdown-item" href=""><i
                                    class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
                                <span class="align-middle">Mis productos</span></a>
                            <!--  -->
                            <div class="dropdown-divider"></div>
                            <!--  -->
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit(); " role="button">
                           <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                           class="align-middle" data-key="t-logout">Logout</span>
                        </a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row m-0">
            <!-- links de hombres, mujeres y niños, aqui tengo que hacer un filtrado con los productos que hay segun el tipo -->
            <div class="col-12">
                <div class=" d-flex align-items-center justify-content-evenly">
                    <a href="#">
                        <h4 class="mb-sm-0 text-primary"><img
                                src="{{ url('assets/images/proyecto/hombre.png') }}" /> HOMBRE </i></h4>
                    </a>
                    <a href="#">
                        <h4 class="mb-sm-0 text-primary"><img
                                src="{{ url('assets/images/proyecto/mujer.png') }}" /> MUJER</h4>
                    </a>
                    <a href="#">
                        <h4 class="mb-sm-0 text-primary"><img
                                src="{{ url('assets/images/proyecto/ninio.png') }}" /> NIÑO </h4>
                    </a>
                </div>
            </div>
        </div> --}}
    </div>
</header>
