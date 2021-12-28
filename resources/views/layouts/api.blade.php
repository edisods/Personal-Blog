<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ mix('css/api.css') }}">
        @livewireStyles
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <header>
            <style>
              
              #intro {
                margin-top: 5px;
              }
              @media (max-width: 991px) {
                #intro {
                  margin-top: 45px;
                }
              }
            </style>
            <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
              <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                  aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home page</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('blog') }}" rel="nofollow">Blog</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item me-3 me-lg-0">
                      @auth
                        <a class="nav-link btn btn-outline-primary me-3 " style="color: blue;" href="{{ route('dashboard') }}" rel="nofollow">Admin</a>
                        @else
                        <a class="nav-link btn btn-outline-primary me-3" style="color: blue;" href="{{ route('login') }}" rel="nofollow">Log in</a>
                      @endauth
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

            @hasSection ('header')
                @yield('header')
            @endif
        </header>
          <main class="my-5">
            @yield('content')
          </main>
          <footer class="bg-light text-lg-start">
            <hr class="m-0" />
            <div class="text-center p-3" style="background-color: #e3f2fd;">
              © 2021 | Shuhrat.test
            </div>
          </footer>
        @livewireScripts
    </body>
</html>
