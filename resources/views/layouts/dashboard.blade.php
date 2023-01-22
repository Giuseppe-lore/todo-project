<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>📌 T O D O</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary flex-md-nowrap d-flex justify-content-between">

        {{-- Logo  --}}
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 px-2">
            <span class="text-warning p-1 display-6">T</span>
            <span class="text-success p-1 display-6">O</span>
            <span class="text-danger p-1 display-6">D</span>
            <span class="p-1 display-6">O</span>
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                >
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">

            {{-- Side Nav --}}
            <nav class="col-md-2 d-none d-md-block bg-primary sidebar py-4 ">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">

                            <a class="nav-link active text-light" href="/console">
                                🕹️ Console
                            </a>

                            <a class="nav-link active text-light" href="{{ route('admin.home') }}">
                                🏠 Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" href="{{ route('admin.todos.index') }}">
                                📒 Lista
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" href="{{ route('admin.todos.create') }}">
                                🪄 Crea 
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 py-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/back.js') }}" defer></script> 
</body>
</html>