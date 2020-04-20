<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <div class="c-sidebar-brand-full" alt="{{ env('APP_NAME') }} Logo">
            <img src="{{ asset('assets/img/logo-new.png') }}" width="190" height="100">
        </div>
        <svg class="c-sidebar-brand-minimized" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/coreui/assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <div class="c-sidebar-brand d-lg-none">
        <img src="{{ asset('assets/img/logo-new.png') }}" width="190" height="100">
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <i class="c-sidebar-nav-icon c-icon cil-home"></i> Dashboard
            </a>
        </li>
        <li class="c-sidebar-nav-title">Menu</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="#">
                <i class="c-sidebar-nav-icon c-icon cil-user"></i> Menu
                <span class="badge badge-info">NEW</span>
            </a>
        </li>
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">Coming soon features</li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="c-sidebar-nav-icon c-icon cil-star"></i> Users
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="#" target="_top">
                        <i class="c-sidebar-nav-icon c-icon cil-columns"></i>Manage Users
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>