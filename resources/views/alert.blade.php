<script src="{{ asset('vendor/sweetalert/sweetalert.all.php') }}"></script>
@if(Session::has('alert.config'))
    <script>
        Swal.fire({!! Session::pull('alert.config') !!});
    </script>
@endif
