<!--   Core JS Files   -->
<script src="/adminAssets/js/core/jquery-3.7.1.min.js"></script>
<script src="/adminAssets/js/core/popper.min.js"></script>
<script src="/adminAssets/js/core/bootstrap.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="/adminAssets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Chart JS -->
<script src="/adminAssets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="/adminAssets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="/adminAssets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="/adminAssets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="/adminAssets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="/adminAssets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
<script src="/adminAssets/js/plugin/jsvectormap/world.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- flatpickr -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>

<!-- Kaiadmin JS -->
<script src="/adminAssets/js/kaiadmin.min.js"></script>

<script>
    function confirmDelete(url) {
        $('#confirmDeleteForm').attr('action', url);
    }

    $('.datetimepicker').flatpickr({
        dateFormat: "d/m/Y H:i",
        locale: "fr",
        enableTime: true,
        time_24hr: true,
    });

    $('.datepicker').flatpickr({
        dateFormat: "d/m/Y",
        locale: "fr",
    });

    $('.datepickermulti').flatpickr({
        dateFormat: "d/m/Y",
        locale: "fr",
        mode: "multiple",
    });
</script>

@if (session('success'))
    <script>
        $( document ).ready(function() {
            Swal.fire(
                'Félicitations!',
                '{{ session("success") }}',
                'success'
            );
        });
    </script>
@endif
@if (session('error'))
    <script>
        $( document ).ready(function() {
            Swal.fire(
                'Erreur',
                '{{ session("error") }}',
                'error'
            );
        });
    </script>
@endif

@yield('scripts')