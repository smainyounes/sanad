<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="/admin" class="logo me-4">
                {{-- <img
                    src="/assets/images/logo.png"
                    alt="navbar brand"
                    class="navbar-brand img-fluid"
                    /> --}}
                <h4 class="text-white">Sanad</h4>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a href="/admin">
                        <i class="fas fa-home"></i>
                        <p>Tableau de bord</p>
                    </a>
                </li>
            
                <li class="nav-item">
                    <a href="{{ route('admin.specialities.index') }}">
                        <i class="fa-solid fa-book-open-reader"></i>
                        <p>Spécialités</p>
                    </a>
                </li>
            
                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}">
                        <i class="fa-solid fa-layer-group"></i>
                        <p>Catégories</p>
                    </a>
                </li>
            
                {{-- 🧑‍⚕️ Specialists --}}
                <li class="nav-item">
                    <a href="{{ route('admin.specialists.index') }}">
                        <i class="fa-solid fa-user-doctor"></i>
                        <p>Spécialistes</p>
                    </a>
                </li>
            
                {{-- 📚 Programs --}}
                <li class="nav-item">
                    <a href="{{ route('admin.programs.index') }}">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>Programmes</p>
                    </a>
                </li>
            
                @if (Auth::guard('admin')->user()->admin_type == 'super_admin')
                    <li class="nav-item">
                        <a href="{{ route('admin.contacts.index') }}">
                            <i class="fa-solid fa-envelope-open-text"></i>
                            <p>Contacts</p>
                        </a>
                    </li>
            
                    <li class="nav-item">
                        <a href="{{ route('admins.index') }}">
                            <i class="fas fa-users"></i>
                            <p>Gestion des admins</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->