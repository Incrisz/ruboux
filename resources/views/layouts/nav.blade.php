<!-- menu -->
<div class="menu">
    <!-- <div class="menu-header">
        <a href="{{url('/home')}}" class="menu-header-logo">
            <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
        </a>
        <a href="{{url('/home')}}" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div> -->
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div>
                    <div class="fw-bold">{{ Auth::user()->name }}</div>
                    <small class="text-muted">Manager</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                    <i class="bi bi-gear dropdown-item-icon"></i> Settings
                </a> -->
                <a class="dropdown-item d-flex align-items-center text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
        <ul>
            <li class="menu-divider">E-Commerce</li>
            <li>
                <a  class=""
                    href="{{url('/home')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-truck"></i>
                    </span>
                    <span>Products</span>
                </a>
                <ul>
                    <li>
                        <a  href="{{route('product.index')}}">View</a>
                    </li>
                    <li>
                        <a  href="{{route('product.create')}}">Add</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Banner</span>
                </a>
                <ul>
                    <li>
                        <a  href="{{route('banner.index')}}">View</a>
                    </li>
                    <li>
                        <a  href="{{route('banner.create')}}">Add</a>
                    </li>
                </ul>
            </li>
            <li>
            <a class="nav-link-icon" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <span class="nav-link-icon">
                       <i class="bi bi-box-arrow-right"></i>
                    </span>
                    <span>{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
<!-- ./  menu -->

<!-- layout-wrapper -->
<div class="layout-wrapper">

    <!-- header -->
<div class="header">
    <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
        <a href="#">
            <i class="bi bi-list"></i>
        </a>
    </div>
    <!-- Logo -->
    <a href="{{url('/home')}}" class="logo">
        <img width="100" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
    </a>
    <!-- ./ Logo -->
    <div class="page-title">Overview</div>
    <form class="search-form" type="get" action="{{url('/search')}}">
        <div class="input-group">
            <button class="btn btn-outline-light" type="Submit" id="button-addon1">
                <i class="bi bi-search"></i>
            </button>
            <input type="search" class="form-control" name="query" placeholder="Search product"
                   aria-label="Example text with button addon" aria-describedby="button-addon1">
            <!-- <a href="#" class="btn btn-outline-light close-header-search-bar">
                <i class="bi bi-x"></i>
            </a> -->
        </div>
    </form>
    <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">
            <!-- <li class="nav-item">
                <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
                    <i class="bi bi-bell icon-lg"></i>
                </a>
            </li> -->
           
            <li class="nav-item">
                    <a href="{{route('product.create')}}" class="btn btn-primary btn-icon">
        <i class="bi bi-plus-circle"></i> Add Product
    </a>
            </li>
        </ul>
    </div>
    <!-- Header mobile buttons -->
    <div class="header-mobile-buttons">
        <a href="#" class="search-bar-btn">
            <i class="bi bi-search"></i>
        </a>
        <a href="#" class="actions-btn">
            <i class="bi bi-three-dots"></i>
        </a>
    </div>
    <!-- ./ Header mobile buttons -->
</div>
    <!-- ./ header -->