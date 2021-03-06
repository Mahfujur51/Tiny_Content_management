<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- JS, Popper.js, and jQuery -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
    <style>
        .main_image {
          position: relative;
          top: 0;
          left: 0;
          border: 1px red solid;
      }
      .icon_image {
          position: absolute;
          top: 10px;
          left: 10px;

      }
  </style>

</head>
<body>
    <div class="wrapper bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('/') }}">TC Management</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{Route::current()->getName() == 'index'? 'active' : ''}}">
                            <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                        </li>

                    </ul>

                </div>
            </nav>
        </div>
    </div>
    @yield('content')
    <div class="wrapper bg-light">
        <div class="footer p-4">
            <div class="text-center">
                <p>Mahfujur &copy; @php
                echo Date("Y");
            @endphp</p>
        </div>
    </div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ee26905a34efd8f"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
