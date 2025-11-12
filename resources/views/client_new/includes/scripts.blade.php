<!-- Bootstrap JS Bundle -->
<script src="/adminAssets/js/core/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function openReservationModal(specialistId) {
        document.getElementById('specialist_id').value = specialistId;
        const modal = new bootstrap.Modal(document.getElementById('reserveSpecialistModal'));
        modal.show();
    }

    document.getElementById('reserveSpecialistBtn').addEventListener('click', async () => {
        const form = document.getElementById('specialistReservationForm');
        const formData = new FormData(form);

        try {
            const response = await fetch("{{ route('specialist-reservations.store') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
                body: formData,
            });

            const result = await response.json();

            if (response.ok) {
                Swal.fire({
                    icon: 'success',
                    title: 'تم إرسال الحجز بنجاح!',
                    text: 'تم تسجيل حجزك لدى الأخصائي بنجاح.',
                    confirmButtonText: 'حسناً',
                    confirmButtonColor: '#198754',
                });

                // إعادة تعيين الحقول
                form.reset();

                // إخفاء النافذة
                const modalEl = document.getElementById('reserveSpecialistModal');
                const modal = bootstrap.Modal.getInstance(modalEl);
                modal.hide();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'حدث خطأ',
                    text: result.message || 'تعذر إنشاء الحجز. حاول مرة أخرى.',
                    confirmButtonText: 'حسناً',
                    confirmButtonColor: '#d33',
                });
            }

        } catch (error) {
            Swal.fire({
                icon: 'error',
                title: 'خطأ في الاتصال',
                text: 'حدث خطأ أثناء الاتصال بالخادم. حاول لاحقاً.',
                confirmButtonText: 'حسناً',
            });
            console.error(error);
        }
    });

    function openProgramReservationModal(programId) {
        document.getElementById('program_id').value = programId;
        const modal = new bootstrap.Modal(document.getElementById('reserveProgramModal'));
        modal.show();
    }

    document.getElementById('reserveProgramBtn').addEventListener('click', async () => {
        const form = document.getElementById('programReservationForm');
        const formData = new FormData(form);

        try {
            const response = await fetch("{{ route('program-reservations.store') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
                body: formData,
            });

            const result = await response.json();

            if (response.ok) {
                Swal.fire({
                    icon: 'success',
                    title: 'تم إرسال الحجز!',
                    text: 'تم إرسال طلبك لحجز البرنامج بنجاح.',
                    confirmButtonText: 'حسناً',
                    confirmButtonColor: '#198754'
                });

                // إعادة تعيين الحقول
                form.reset();

                // إخفاء النافذة
                const modalEl = document.getElementById('reserveProgramModal');
                const modal = bootstrap.Modal.getInstance(modalEl);
                modal.hide();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'حدث خطأ',
                    text: result.message || 'تعذر إنشاء الحجز. حاول مرة أخرى.',
                    confirmButtonText: 'حسناً',
                    confirmButtonColor: '#d33'
                });
            }

        } catch (error) {
            Swal.fire({
                icon: 'error',
                title: 'خطأ في الاتصال',
                text: 'حدث خطأ أثناء الاتصال بالخادم. حاول لاحقاً.',
                confirmButtonText: 'حسناً',
            });
            console.error(error);
        }
    });

</script>

@yield('scripts')