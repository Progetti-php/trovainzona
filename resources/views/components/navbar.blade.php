<!-- Navbar-->
<nav data-mdb-navbar-init class="navbar navbar-expand-lg navbar-light bgD sticky-top">
    <div class="container-fluid justify-content-between">
        <!-- Left elements -->
        <div class="d-flex">
            <!-- Brand -->
            
            <ul class="navbar-nav flex-row d-none d-md-flex">
                <li class="nav-item me-3 me-lg-1 active">
                    <a class="nav-link" href="/">
                        <span><i class="fas fa-home fa-lg colorIcon"></i></span>
                        <span class="badge rounded-pill badge-notification bg-danger"></span>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="#">
                        <span><i class="fa-solid fa-bullhorn fa-lg colorIcon"></i></span>
                    </a>
                </li>
                
                
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="{{route('detail')}}">
                        <span><i class="fa-regular fa-newspaper fa-lg colorIcon"></i></span>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="#">
                        <span><i class="fas fa-users fa-lg colorIcon"></i></span>
                        <span class="badge rounded-pill badge-notification bg-danger"></span>
                    </a>
                </li>
            </ul>
            
        </div>
        <!-- Left elements -->
        
        <!-- Center elements -->
        <a class="navbar-brand me-2  d-flex align-items-center" href="#">
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
                    <a class="nav-link d-sm-flex align-items-sm-center" href="#">
                        <img
                        src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp"
                        class="rounded-circle"
                        height="22"
                        alt="Black and White Portrait of a Man"
                        loading="lazy"
                        />
                        <strong class="d-none d-sm-block ms-1 colorIcon">Miao</strong>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="#">
                        <span><i class="fa-solid fa-pen-clip fa-lg colorIcon"></i></span>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="#">
                        <span><i class="fas fa-comments fa-lg colorIcon"></i></span>
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
                    <i class="fas fa-bell fa-lg colorIcon"></i>
                    <span class="badge rounded-pill badge-notification bg-danger"></span>
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