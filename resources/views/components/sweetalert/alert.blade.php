{{-- resources/views/components/sweetalert/alert.blade.php --}}
@props(['type' => 'success', 'title' => 'Berhasil!', 'message' => ''])

@if($message)
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: '{{ $type }}',
                title: '{{ $title }}',
                text: '{{ $message }}',
                timer: 2000,
                showConfirmButton: false
            });
        });
    </script>
@endif
