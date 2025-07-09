{{-- resources/views/components/sweetalert/flash.blade.php --}}
@if(session('success') || session('error') || session('warning') || session('info'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: '{{ session('success') ? 'success' : (session('error') ? 'error' : (session('warning') ? 'warning' : 'info')) }}',
                title: '{{ session('success') ? 'Berhasil!' : (session('error') ? 'Gagal!' : (session('warning') ? 'Peringatan!' : 'Info')) }}',
                text: '{{ session('success') ?? session('error') ?? session('warning') ?? session('info') }}',
                timer: 3000,
                showConfirmButton: false
            });
        });
    </script>
@endif
