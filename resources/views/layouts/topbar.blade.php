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
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-category-alt fs-22'></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fw-semibold fs-15"> Recomendaciones</h6>
                                </div>
                            </div>
                        </div>

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

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-shopping-bag fs-22'></i>
                        <span
                            class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart"
                        aria-labelledby="page-header-cart-dropdown">
                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                </div>
                                <div class="col-auto">
                                    <span class="badge badge-soft-warning fs-13"><span class="cartitem-badge">7</span>
                                        items</span>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 300px;">
                            <div class="p-2">
                                <div class="text-center empty-cart" id="empty-cart">
                                    <div class="avatar-md mx-auto my-3">
                                        <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                                            <i class='bx bx-cart'></i>
                                        </div>
                                    </div>
                                    <h5 class="mb-3">Your Cart is Empty!</h5>
                                    <a href="#" class="btn btn-success w-md mb-3">Shop Now</a>
                                </div>
                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-1.png"
                                            class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html"
                                                    class="text-reset">Branded
                                                    T-Shirts</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>10 x $32</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button"
                                                class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                    class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-2.png"
                                            class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html"
                                                    class="text-reset">Bentwood Chair</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>5 x $18</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button"
                                                class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                    class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-3.png"
                                            class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html" class="text-reset">
                                                    Borosil Paper Cup</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>3 x $250</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button"
                                                class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                    class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-6.png"
                                            class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html"
                                                    class="text-reset">Gray
                                                    Styled T-Shirt</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>1 x $1250</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span>
                                            </h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button"
                                                class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                    class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-5.png"
                                            class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html"
                                                    class="text-reset">Stillbird Helmet</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>2 x $495</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button"
                                                class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                    class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border"
                            id="checkout-elem">
                            <div class="d-flex justify-content-between align-items-center pb-3">
                                <h5 class="m-0 text-muted">Total:</h5>
                                <div class="px-2">
                                    <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                                </div>
                            </div>

                            <a href="apps-ecommerce-checkout.html" class="btn btn-success text-center w-100">
                                Checkout
                            </a>
                        </div>
                    </div>
                </div>
<!-- fullscreen -->
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>
<!-- pantalla oscura y clara -->
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>
                <!-- mapas -->
                <div class="ms-1 header-item d-none d-sm-flex">
                    <a  href="{{ route('mapaTiendas') }}">
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='ri-earth-line fs-22'></i>
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
                                <span class="align-middle">Messages</span></a>
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
