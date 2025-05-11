<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="icon" type="image/png" href="{{ asset('img/icon/animate.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title' ?? 'Animate By Yunna Marcier')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Kaushan+Script&family=Monoton&family=Rancho&family=Satisfy&family=Unica+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Germania+One&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.css">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/awal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    @yield('css')

    <style>
    .show{
        display: flex;
    }

    .chat-area{
        height: 80%;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .income-msg{
        display: flex;
        align-items: center;
    }
    .avatar{
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
    }
    .income-msg .msg{
        background-color: dodgerblue;
        color: white;
        padding: 0.5rem;
        border-radius: 25px;
        margin-left: 1rem;
        box-shadow: 0 2px 5px rgba(0,0,0,0.4);
    }
    .badges{
        position: absolute;
        width: 30px;
        height: 30px;
        background-color: red;
        color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        top: -10px;
        right: -10px;
    }
    .input-area{
        position: relative;
        display: flex;
        justify-content: center;
    }

    .submit{
        padding: 0.25rem 0.5rem;
        margin-left: 0.5rem;
        background-color: green;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        opacity: 0.7;
    }
    .chatSection{
        text-align: left;
    }
    </style>
</head>
<body>
    <div class="navbar-fixed">
        <nav class="nav-extended" id="navbars">
            <div class="nav-wrapper">
               <a href="{{ url('/') }}" class="brand-logo center" id="BrandLogo"><img src="{{ asset('img/icon/animate.png') }}" style="width : 231px;"></a>
                   <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                    <i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        @guest
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Daftar</a></li>
                        @endif
                        @else
                        <li><a href="">Hi. {{ Auth::user()->name }}</a></li>
                        <li>
                            <a class='dropdown-trigger' href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-forms').submit();">Logout</a>
                        </li>
                        <li>
                            <a class='dropdown-trigger' href="{{ route('cart') }}">
                                <img style="width: 40px; position: relative; top: 12px;" src="{{ asset('img/icon/cart-shop.png') }}">
                                <span class="new badge blue">{{ Cart::session(auth()->id())->getContent()->count() }}</span>
                            </a>
                        </li>
                        <form id="logout-forms" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <!-- Dropdown Structure -->
                        <ul id='dropdowns' class='dropdown-content'>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                        @endguest
                    </ul>
                </nav>
            </div>

            <!-- MEnu Size Di ho android -->
            <ul class="sidenav" id="mobile-demo" style="background: #00000029">
                @guest
                <div style="position: relative; top: 40px; background-color: black">
                <li><a style="color: white" href="{{ url('/') }}">Home</a></li>
                <li><a style="color: white" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @if (Route::has('register'))
                <li><a style="color: white" href="{{ route('register') }}">Daftar Sekarang</a></li>
                </div>
                @endif
                @else
                <!-- Dropdown Trigger -->
                <a class='dropdown-trigger btn' style="margin-top: 20px; background: #162050bd; width: 78%; font-size: 20px; font-family: 'Germania One', cursive;" href='#' data-target=''>{{ Auth::user()->name }}</a>
                <div style="position: relative; left: 77.8%; bottom: 54px;background-color: #162050bd; width: 40px; height: 100%; "><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i><img style="width: 70px" src="{{ asset('img/icon/logout.png') }}"></i></a></div>

                <!-- Dropdown Structure -->
                <ul id='' class='dropdown-content'>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </ul>

            <div class=fixed-action-btn>
                <div class="chat-popup">
                    <div class="badges">1</div>
                    <div class="chat-area">
                        <div class="income-msg">
                            <img class="avatar" width="400" src="{{ asset('img/barang/default.png') }}">
                            <span class="msg">Hi, How can I help you?</span>
                        </div>
                    </div>

                    <div class="input-area">
                        <input style="width: 100%; border: 1px solid #ccc; font-size: 1rem; border-radius: 5px; height: 2.2rem;" type="text" id="emoji-area" class="emoji-lebar" name=""/>
                        <button id="bt" class="btn submit"><i class="material-icons">send</i></button>
                    </div>
                </div>

                <button id="bt" class='btn-floating btn-large black chat-btn'><img style="width: 36px; position: relative; top: 8px;" alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNjQiIGhlaWdodD0iNjQiCnZpZXdCb3g9IjAgMCAxNzIgMTcyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxkZWZzPjxsaW5lYXJHcmFkaWVudCB4MT0iMzUuNzg5NDQiIHkxPSIyMy45NTkwNiIgeDI9IjM1Ljc4OTQ0IiB5Mj0iMTM5LjYyMSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJjb2xvci0xX1NoUDZnaWVTeXdrS19ncjEiPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iIzJhZjU5OCI+PC9zdG9wPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzAwOWVmZCI+PC9zdG9wPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IHgxPSI4NiIgeTE9IjIzLjk1OTA2IiB4Mj0iODYiIHkyPSIxMzkuNjIxIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgaWQ9ImNvbG9yLTJfU2hQNmdpZVN5d2tLX2dyMiI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjMmFmNTk4Ij48L3N0b3A+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMDA5ZWZkIj48L3N0b3A+PC9saW5lYXJHcmFkaWVudD48bGluZWFyR3JhZGllbnQgeDE9IjQ4LjM3NSIgeTE9IjUzLjQ2NTEyIiB4Mj0iNDguMzc1IiB5Mj0iNjIuODQxODEiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0iY29sb3ItM19TaFA2Z2llU3l3a0tfZ3IzIj48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiM5NWZhY2MiPjwvc3RvcD48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM2ZWM4ZmYiPjwvc3RvcD48L2xpbmVhckdyYWRpZW50PjxsaW5lYXJHcmFkaWVudCB4MT0iODYiIHkxPSI1My40NjUxMiIgeDI9Ijg2IiB5Mj0iNjIuODQxODEiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0iY29sb3ItNF9TaFA2Z2llU3l3a0tfZ3I0Ij48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiM5NWZhY2MiPjwvc3RvcD48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM2ZWM4ZmYiPjwvc3RvcD48L2xpbmVhckdyYWRpZW50PjxsaW5lYXJHcmFkaWVudCB4MT0iOTguMDkzNzUiIHkxPSI4OC4zNDM1IiB4Mj0iOTguMDkzNzUiIHkyPSI5NS4zMjAyNSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJjb2xvci01X1NoUDZnaWVTeXdrS19ncjUiPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iIzk1ZmFjYyI+PC9zdG9wPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzZlYzhmZiI+PC9zdG9wPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IHgxPSIxMjcuNjU2MjUiIHkxPSI4OC4zNDM1IiB4Mj0iMTI3LjY1NjI1IiB5Mj0iOTUuMzIwMjUiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0iY29sb3ItNl9TaFA2Z2llU3l3a0tfZ3I2Ij48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiM5NWZhY2MiPjwvc3RvcD48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM2ZWM4ZmYiPjwvc3RvcD48L2xpbmVhckdyYWRpZW50PjwvZGVmcz48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLWxpbmVqb2luPSJtaXRlciIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSIiIHN0cm9rZS1kYXNob2Zmc2V0PSIwIiBmb250LWZhbWlseT0ibm9uZSIgZm9udC13ZWlnaHQ9Im5vbmUiIGZvbnQtc2l6ZT0ibm9uZSIgdGV4dC1hbmNob3I9Im5vbmUiIHN0eWxlPSJtaXgtYmxlbmQtbW9kZTogbm9ybWFsIj48cGF0aCBkPSJNMCwxNzJ2LTE3MmgxNzJ2MTcyeiIgZmlsbD0ibm9uZSI+PC9wYXRoPjxnPjxwYXRoIGQ9Ik0zMi4yNSw3MS44OTA2M2gtNS4zNzVjMCwxMC4zMjI2OSA1LjIzNzk0LDE5LjY2NDQ0IDE0Ljc1MTY5LDI2LjMxMDYzbDMuMDc3MTksLTQuNDA0ODFjLTguMDMwMjUsLTUuNjExNSAtMTIuNDUzODgsLTEzLjM5MTgxIC0xMi40NTM4OCwtMjEuOTA1ODF6IiBmaWxsPSJ1cmwoI2NvbG9yLTFfU2hQNmdpZVN5d2tLX2dyMSkiPjwvcGF0aD48cGF0aCBkPSJNMTQyLjYyNTYzLDEyOC4zODQ1NmM4LjU2MjM3LC03LjAwOSAxMy4yNDkzNywtMTYuNDI4NjkgMTMuMjQ5MzcsLTI2LjcwODM4YzAsLTE5LjA0MDk0IC0xNi42NTE3NSwtMzQuNzYyODEgLTM4LjAyMjc1LC0zNi45MDQ3NWMtMy45MTMsLTIxLjc0MTg3IC0yNS4xODk5NCwtMzcuODk2NDQgLTUwLjUxNjk0LC0zNy44OTY0NGMtMjguMjM3NTYsMCAtNTEuMjEwMzEsMjAuMTkzODcgLTUxLjIxMDMxLDQ1LjAxNTYzYzAsMTMuMzE5MjUgNi4yNzgsMjUuMzA4MTkgMTcuNzI5NDQsMzMuOTUxMTlsLTUuNDY5MDYsMTYuOTYwODFjLTAuMzQ2NjksMS4wNzc2OSAwLjAyMTUsMi4yNjAxOSAwLjkxOTEzLDIuOTUzNTZjMC40NzgzNywwLjM2ODE5IDEuMDU4ODcsMC41NTYzMSAxLjYzOTM3LDAuNTU2MzFjMC41MDI1NiwwIDEuMDA1MTIsLTAuMTM5NzUgMS40NDg1NiwtMC40MjQ2M2wxOC4wMDg5NCwtMTEuNTI0YzYuNzkxMzEsMi4yMzMzMSAxNS4xMTk4OCwzLjA1ODM3IDIzLjEwNzEzLDIuMjE3MTljNi42NTk2MiwxMy4wOTYxOSAyMS43ODc1NiwyMi4yNzY2OSAzOS4zNjY1LDIyLjI3NjY5YzUuMjIxODEsMCAxMC4zMzM0NCwtMC43NjU5NCAxNS4yMDg1NiwtMi4yNzYzMWwxNC40NzQ4Nyw4LjE5Njg3YzAuNDEzODgsMC4yMzM4MSAwLjg3MDc1LDAuMzQ5MzggMS4zMjQ5NCwwLjM0OTM4YzAuNTkxMjUsMCAxLjE3OTgxLC0wLjE5MzUgMS42NjM1NiwtMC41Nzc4MWMwLjg1NzMxLC0wLjY3NzI1IDEuMjIwMTIsLTEuODA2IDAuOTE5MTIsLTIuODU2ODF6TTUwLjk3MTEzLDEwOC44NzMzMWMtMC43ODc0NCwtMC4yODc1NiAtMS42NjM1NiwtMC4xODgxMiAtMi4zNzAzOCwwLjI2MDY5bC0xMi44MDU5NCw4LjE5Njg3bDMuNzcwNTYsLTExLjY5MzMxYzAuMzYyODEsLTEuMTIzMzcgLTAuMDUzNzUsLTIuMzUxNTYgLTEuMDIxMjUsLTMuMDI2MTJjLTEwLjk4OTE5LC03LjY4MzU2IC0xNy4wNDQxMiwtMTguNTkyMTMgLTE3LjA0NDEyLC0zMC43MjA4MWMwLC0yMS44NTc0NCAyMC41NTkzOCwtMzkuNjQwNjIgNDUuODM1MzEsLTM5LjY0MDYyYzIyLjI1MjUsMCA0MS4wMDMxOSwxMy42NzkzOCA0NS4wMTgzMSwzMi4yNzQxOWMtMjMuNDY5OTQsMC4yNDQ1NiAtNDIuNDc4NjIsMTYuODA0OTQgLTQyLjQ3ODYyLDM3LjE1MmMwLDMuMzU0IDAuNTYxNjksNi41ODcwNiAxLjUyOTE5LDkuNjgwMzdjLTcuMjEwNTYsMC41NDgyNSAtMTQuNTgyMzcsLTAuMzQ2NjkgLTIwLjQzMzA2LC0yLjQ4MzI1ek0xMzcuOTMwNTYsMTI1LjIzNzVjLTAuODk0OTQsMC42NzE4OCAtMS4yODE5NCwxLjgyNDgxIC0wLjk3MDE5LDIuODk3MTNsMi41MTU1LDguNzE4MjVsLTkuNzY5MDYsLTUuNTMzNTZjLTAuNDA4NSwtMC4yMzExMiAtMC44NjUzOCwtMC4zNDkzOCAtMS4zMjQ5NCwtMC4zNDkzOGMtMC4yODc1NiwwIC0wLjU3NzgxLDAuMDQ4MzcgLTAuODU3MzEsMC4xNDI0NGMtNC42NjU1LDEuNTY5NSAtOS41OTQzNywyLjM2NzY5IC0xNC42NDY4OCwyLjM2NzY5Yy0yMC43NDc1LDAgLTM3LjYyNSwtMTQuMjY3OTQgLTM3LjYyNSwtMzEuODAzODhjLTAuMDAyNjksLTE3LjUzMzI1IDE2Ljg3NDgxLC0zMS44MDExOSAzNy42MjIzMSwtMzEuODAxMTljMjAuNzQ3NSwwIDM3LjYyNSwxNC4yNjc5NCAzNy42MjUsMzEuODAxMTljMCw5LjEyMTM4IC00LjQ2Mzk0LDE3LjQ5MDI1IC0xMi41Njk0NCwyMy41NjEzMXoiIGZpbGw9InVybCgjY29sb3ItMl9TaFA2Z2llU3l3a0tfZ3IyKSI+PC9wYXRoPjxjaXJjbGUgY3g9IjE4IiBjeT0iMjIiIHRyYW5zZm9ybT0ic2NhbGUoMi42ODc1LDIuNjg3NSkiIHI9IjIiIGZpbGw9InVybCgjY29sb3ItM19TaFA2Z2llU3l3a0tfZ3IzKSI+PC9jaXJjbGU+PGcgZmlsbD0idXJsKCNjb2xvci00X1NoUDZnaWVTeXdrS19ncjQpIj48Y2lyY2xlIGN4PSIzMiIgY3k9IjIyIiB0cmFuc2Zvcm09InNjYWxlKDIuNjg3NSwyLjY4NzUpIiByPSIyIj48L2NpcmNsZT48L2c+PGcgZmlsbD0idXJsKCNjb2xvci01X1NoUDZnaWVTeXdrS19ncjUpIj48Y2lyY2xlIGN4PSIzNi41IiBjeT0iMzQuNSIgdHJhbnNmb3JtPSJzY2FsZSgyLjY4NzUsMi42ODc1KSIgcj0iMS41Ij48L2NpcmNsZT48L2c+PGcgZmlsbD0idXJsKCNjb2xvci02X1NoUDZnaWVTeXdrS19ncjYpIj48Y2lyY2xlIGN4PSI0Ny41IiBjeT0iMzQuNSIgdHJhbnNmb3JtPSJzY2FsZSgyLjY4NzUsMi42ODc1KSIgcj0iMS41Ij48L2NpcmNsZT48L2c+PC9nPjwvZz48L3N2Zz4="/></button>


                <a href="{{ route('cart') }}" class='btn-floating btn-large black'><img style='width: 36px; position: relative; top: 12px;' src="{{ asset('img/icon/cart-shop.png') }}">{{ Cart::session(auth()->id())->getContent()->count() }}</a>
            </div>
            @endguest
        </ul>
            <div class="nav-wrapper">
                <div class="container">
                  <form action="{{ route('cari') }}" method="GET">
                    <div class="input-field">
                      <input id="search" type="search" placeholder="Cari di Dice Store" name="cari" required>
                      <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                      <i class="material-icons">close</i>
                      <a href="#" id="filter" data-target='dropdown2' class="btn-floating btn-small pulse dropdown-triggers"><i class="material-icons">filter_list</i></a>
                      <!-- Dropdown Structure -->
                      <ul id='dropdown2' class='dropdown-content'>
                        <li style="text-align: center; background-color: grey;"><a style="color: white" href="#!"><i style="position: relative; left: 30%" class="material-icons">filter_list</i></a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li style="text-align: center"><a href="{{ route('cariHargaT') }}">Harga Murah</a></li>
                        <li style="text-align: center"><a href="{{ route('cariHargaR') }}">Harga Mahal</a></li>
                        <li style="text-align: center"><a href="{{ route('cariA_Z') }}">A - Z</a></li>
                        <li style="text-align: center"><a href="{{ route('cariZ_A') }}">Z - A</a></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
</div>

<!-- Footer -->
<footer class="page-footer" id="footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Animate Official Store</h5>
        <p class="grey-text text-lighten-4">BY YUNNA MERCIER
        </p>
    </div>
    <div class="col l4 offset-l2 s12">
        <h6 class="white-text">Follow Me</h6>
        <ul>
            <li><a class="grey-text text-lighten-3" href="#!"><i class="fas fa-shopping-bag"></i> Animate Official Store</a></li>
            <li><a class="grey-text text-lighten-3" href="#!"><i class="fas fa-envelope-square"></i> contact@animateofficial.id</a></li>
            <li><a class="grey-text text-lighten-3" href="#!"><i class="fab fa-whatsapp-square"></i> 0888-1111-11111</a></li>
        </ul>
    </div>
</div>
</div>
<div class="footer-copyright">
    <div class="container"> <i class="fas fa-cog fa-spin"></i>
        © <?= date('Y')?> <img src="{{ asset('img/icon/animate.png') }}" style="width : 88px;">

    </div>
</div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
    <script>
        $("#emoji-area").emojioneArea({
            pickerPosition:"top"
        });

        const popup = document.querySelector('.chat-popup');
        const chatBtn = document.querySelector('.chat-btn');
        const submitBtn = document.querySelector('.submit');
        const chatArea = document.querySelector('.chat-area');


        chatBtn.addEventListener('click', ()=>{popup.classList.toggle('show')});
    </script>
<script>

</script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/materialize.min.js') }}"></script>
<script src="{{ asset('js/materialize.js') }}"></script>
<script src="{{ asset('js/home.js') }}"></script>
<script>
const dropdowns = document.querySelectorAll('.dropdown-triggers');
     M.Dropdown.init(dropdowns);

const collapsible = document.querySelectorAll('.collapsible.expandable');
     M.Collapsible.init(collapsible);

</script>
@yield('js')
</body>
</html>
