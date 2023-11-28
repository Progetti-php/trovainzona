<!-- Navbar-->
<nav data-mdb-navbar-init class="navbar navbar-expand-lg navbar-light bgD sticky-top">
    <div class="container-fluid justify-content-between">
        <!-- Left elements -->
        <div class="d-flex">
            <!-- Brand -->
            
            <ul class="navbar-nav flex-row d-none d-md-flex">
                <li class="nav-item me-3 me-lg-1 active">
                    <a class="nav-link" href="/">
                        <span class="fs-6 colorW"><i class="fas fa-home fa-lg colorW me-1"></i>Home</span>
                        <span class="badge rounded-pill badge-notification bg-danger"></span>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="{{route('articles')}}">
                        <span class="fs-6 colorW"><i class="fa-solid fa-bullhorn fa-lg colorW me-1"></i>Annunci</span>
                    </a>
                </li>
                
                
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="{{route('detail')}}">
                        <span class="fs-6 colorW"><i class="fa-regular fa-newspaper fa-lg colorW me-1"></i>Trova in Zona</span>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="{{route('contacts')}}">
                        <span class="fs-6 colorW"><i class="fas fa-users fa-lg colorW me-1"></i>Contatti</span>
                        <span class="badge rounded-pill badge-notification bg-danger"></span>
                    </a>
                </li>
            </ul>
            
        </div>
        <!-- Left elements -->
        
        <!-- Center elements -->
        <a class="navbar-brand me-2  d-flex align-items-center" href="/">
            <p class="colorIcon fontSTIX fs-3 m-0">Trova in Zona</p>
        </a>
        
        <!-- Search form -->
        {{-- <form class="input-group w-auto my-auto d-none d-sm-flex ">
            <input 
            autocomplete="off"
            type="search"
            class="form-control rounded "
            placeholder="Search"
            style="min-width: 350px;"
            />
            <span class="input-group-text border-0 d-none d-lg-flex "
            ><i class="fas fa-search colorP"></i
                ></span>
            </form> --}}
            
            
            <!-- Center elements -->
            
            <!-- Right elements -->
            <ul class="navbar-nav flex-row">
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link d-sm-flex align-items-sm-center" href="/register">
                        <span class="fs-6 colorW"><i class="fa-regular fa-address-card colorW fa-lg me-1"></i>Registrati</span>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="#">
                        <span class="fs-6 colorW"><i class="fa-solid fa-pen-clip fa-lg colorW me-1"></i>Nuovo Annuncio</span>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="#">
                        <span class="fs-6 colorW"><i class="fas fa-comments fa-lg colorW me-1"></i>Messaggi</span>
                    </a>
                </li>
                
                
                <li class="nav-item dropdown me-3 me-lg-1">
                    <a
                    data-mdb-dropdown-init
                    class="nav-link dropdown-toggle hidden-arrow"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    aria-expanded="false"
                    >
                    <i class="fas fa-bell fa-lg colorW"></i>
                    <span class="badge rounded-pill badge-notification bg-danger "></span>
                </a>
                <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
                >
                <li>
                    <a class="dropdown-item" href="#">Some news</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Another news</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                </li>
            </ul>
        </li>
        
    </ul>
    <!-- Right elements -->
</div>
</nav>
<!-- Navbar -->