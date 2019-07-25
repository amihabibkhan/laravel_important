// https://github.com/brian2694/laravel-toastr

// first command: composer require brian2694/laravel-toastr
// second command: php artisan vendor:publish (if above 5.5)

// syntex: 
    Route::get('/', function () {
        Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);

        return view('welcome');
    });

// in blade

    <!DOCTYPE html>
    <html>
        <head>
            <title>Laravel</title>
            <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        </head>
        <body>
            <div class="container">
                <div class="content">
                    <div class="title">Laravel 5</div>
                </div>
            </div>
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
            <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
            {!! Toastr::message() !!}
            // here will place the error message script
        </body>
    </html>

// for showing form validation errors ( it will be placed after toastr js)
    <script>
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error', {
                    closeButton: true,
                    progressBar: true
                });
            @endforeach
        @endif
    </script>
