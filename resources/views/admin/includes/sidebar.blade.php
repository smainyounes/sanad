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
                <li class="nav-item ">
                    <a
                        href="/admin"
                        >
                        <i class="fas fa-home"></i>
                        <p>Tableau de bord</p>
                        {{-- <span class="caret"></span> --}}
                    </a>
                </li>
                
                @if (Auth::guard('admin')->user()->admin_type == 'super_admin')
                    <li class="nav-item ">
                        <a  href="{{ route('admin.contacts.index') }}">
                            <i class="fa-solid fa-envelope-open-text"></i>
                            <p>Contacts</p>
                            {{-- <span class="caret"></span> --}}
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a  href="{{ route('admins.index') }}">
                            <i class="fas fa-users"></i>
                            <p>Gestion des admins</p>
                            {{-- <span class="caret"></span> --}}
                        </a>
                        {{-- <div class="collapse" id="admin">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.index') }}">
                                        <span class="sub-item">Liste des admins</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.create') }}">
                                        <span class="sub-item">Ajouter un admin</span>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </li>

                    {{-- <li class="nav-item ">
                        <a  href="{{ route('admin.role.index') }}">
                            <i class="fa-solid fa-shield-halved"></i>
                            <p>Gestion des roles</p>
                        </a>
                    </li> --}}

                    {{-- <li class="nav-item">
                        <a href="{{ route('admin.settings.index') }}">
                            <i class="fa-solid fa-gear"></i>
                            <p>Parameteres generales</p>
                        </a>
                    </li> --}}
                @endif
                
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->