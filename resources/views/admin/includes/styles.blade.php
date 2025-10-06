<!-- Fonts and icons -->
<script src="/adminAssets/js/plugin/webfont/webfont.min.js"></script>
<script>
  WebFont.load({
    google: { families: ["Public Sans:300,400,500,600,700"] },
    custom: {
      families: [
        "Font Awesome 5 Solid",
        "Font Awesome 5 Regular",
        "Font Awesome 5 Brands",
        "simple-line-icons",
      ],
      urls: ["/adminAssets/css/fonts.min.css"],
    },
    active: function () {
      sessionStorage.fonts = true;
    },
  });
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="/adminAssets/css/bootstrap.min.css" />
<link rel="stylesheet" href="/adminAssets/css/plugins.min.css" />
<link rel="stylesheet" href="/adminAssets/css/kaiadmin.min.css" />
<!-- flatpickr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="icon" href="/assets/images/logo-2.png" type="image/x-icon">

<style>
    /* .sidebar[data-background-color=dark] {
        background: #1e4699 !important;
    }


    .logo-header[data-background-color=dark] {
        background: #1e4699 !important;
    }

    .sidebar[data-background-color=dark] .nav>.nav-item a {
        color: #DDE1E1 !important;
    }

    .sidebar .nav.nav-secondary>.nav-item.active a:before, .sidebar[data-background-color=white] .nav.nav-secondary>.nav-item.active a:before {
        background: #f15b25 !important;
    }

    .sidebar .nav.nav-secondary>.nav-item.active a i, .sidebar[data-background-color=white] .nav.nav-secondary>.nav-item.active a i {
        color: #f15b25 !important;
    }

    .sidebar[data-background-color=dark] .nav>.nav-item.active a:focus p, .sidebar[data-background-color=dark] .nav>.nav-item.active a:hover p, .sidebar[data-background-color=dark] .nav>.nav-item.active>a p {
        color: #f15b25 !important;
    }

    .sidebar .nav>.nav-item a i, .sidebar[data-background-color=white] .nav>.nav-item a i {
        color: #f15b25;
    }

    .main-header {
        background: #1e4699;
    }

    .navbar .navbar-nav .nav-item .nav-link {
        color: #f15b25;
    }

    .sidebar .nav.nav-secondary>.nav-item a:focus i, .sidebar .nav.nav-secondary>.nav-item a:hover i, .sidebar .nav.nav-secondary>.nav-item a[data-toggle=collapse][aria-expanded=true] i, .sidebar[data-background-color=white] .nav.nav-secondary>.nav-item a:focus i, .sidebar[data-background-color=white] .nav.nav-secondary>.nav-item a:hover i, .sidebar[data-background-color=white] .nav.nav-secondary>.nav-item a[data-toggle=collapse][aria-expanded=true] i {
      color: #f15b25 !important;
    }

    .btn-primary {
        background-color: #f15b25 !important;
        border-color: #f15b25 !important;
    }
    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .btn-primary:active:focus,
    .btn-primary:active:hover,
    .btn-primary:focus:hover,
    .btn-primary.focus,
    .btn-primary.focus:hover {
        background-color: #f15b25 !important;
        border-color: #f15b25 !important;
    }
    .btn-primary:disabled {
        background-color: #f15b25 !important;
        border-color: #f15b25 !important;
    } */
</style>

@yield('styles')