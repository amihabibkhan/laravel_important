@if(count($errors) > 0)
    <script>
        function error_message() {
            swal({
                title: "Please, Check all required fields",
                icon: "error",
                timer: 2000
            });
        }
        setTimeout(function () {
            error_message()
        }, 1000)
    </script>
@endif

@if(session('success'))
    <script>
        function success_message() {
            swal({
                title: "{{ session('success') }}",
                icon: "success",
                timer: 2000
            });
        }
        setTimeout(function () {
            success_message()
        }, 1000)
    </script>
@endif

@if(session('error'))
    <script>
        function error_msg() {
            swal({
                title: "{{ session('error') }}",
                icon: "error",
                timer: 2000
            });
        }
        setTimeout(function () {
            error_msg()
        }, 1000)
    </script>
@endif
