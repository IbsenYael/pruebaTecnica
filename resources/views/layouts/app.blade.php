<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user" content="{{ Auth::user() }}">


    <title>{{ config('app.name', 'prueba tecnica') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="mb-5">
            <b-navbar toggleable="lg" type="dark" variant="dark">
              <b-navbar-brand href="{{ url('/') }}">{{ config('app.name', 'Prueba Tecnica') }}</b-navbar-brand>

              <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

              <b-collapse id="nav-collapse" is-nav>
                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto">
                    @guest
                     @if (Route::has('login'))
                         <b-nav-item  href="{{ route('login') }}">{{ __('Login') }}</b-nav-item>
                     @endif

                     @if (Route::has('register'))
                         <b-nav-item href="{{ route('register') }}">{{ __('Register') }}</b-nav-item>
                     @endif
                    @else
                      <b-nav-item-dropdown right>
                        <!-- Using 'button-content' slot -->
                        <template #button-content>
                          <em>{{Auth::user()->name}}</em>
                        </template>
                        <b-dropdown-item href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</b-dropdown-item>
                      </b-nav-item-dropdown>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>

                    @endguest

                </b-navbar-nav>
              </b-collapse>
            </b-navbar>
          </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
