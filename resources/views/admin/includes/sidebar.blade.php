<!-- الشريط الجانبي -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- رأس الشعار -->
        <div class="logo-header" data-background-color="dark">
            <a href="/admin" class="logo me-4">
                {{-- <img
                    src="/assets/images/logo.png"
                    alt="شعار الشريط العلوي"
                    class="navbar-brand img-fluid"
                /> --}}
                <h4 class="text-white">سند</h4>
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
        <!-- نهاية رأس الشعار -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a href="/admin">
                        <i class="fas fa-home"></i>
                        <p>لوحة التحكم</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.clients.index') }}">
                        <i class="fas fa-users"></i>
                        <p>العملاء</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.specialities.index') }}">
                        <i class="fa-solid fa-book-open-reader"></i>
                        <p>التخصصات</p>
                    </a>
                </li>
            
                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}">
                        <i class="fa-solid fa-layer-group"></i>
                        <p>الفئات</p>
                    </a>
                </li>
            
                {{-- 🧑‍⚕️ الأخصائيون --}}
                <li class="nav-item">
                    <a href="{{ route('admin.specialists.index') }}">
                        <i class="fa-solid fa-user-doctor"></i>
                        <p>الأخصائيون</p>
                    </a>
                </li>
            
                {{-- 📚 البرامج --}}
                <li class="nav-item">
                    <a href="{{ route('admin.programs.index') }}">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>البرامج</p>
                    </a>
                </li>
            
                @if (Auth::guard('admin')->user()->admin_type == 'super_admin')
                    <li class="nav-item">
                        <a href="{{ route('admin.contacts.index') }}">
                            <i class="fa-solid fa-envelope-open-text"></i>
                            <p>جهات الاتصال</p>
                        </a>
                    </li>
            
                    <li class="nav-item">
                        <a href="{{ route('admins.index') }}">
                            <i class="fas fa-users"></i>
                            <p>إدارة المشرفين</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- نهاية الشريط الجانبي -->
