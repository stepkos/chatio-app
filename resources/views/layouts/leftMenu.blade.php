<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Chatio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/leftMenu.css') }}" type="text/css">

    @yield('head')

</head>
<body>

    <nav id="menuLeft">
        <header id="collaborate-logo">
            Chatio
        </header>

        <section id="user-section">

            <!-- <div id='profile-picture' style='background-image: url(data:image/jpg;base64,$profile_picture)'></div> -->
            <!-- <div id="profile-picture" style="background-image: url(data:image/jpg;base64,{{ asset('images/default-avatar.png') }})"></div> -->
            
            <!-- <div id="profile-picture" style="background-image: url({{ asset('images/unknown-picture.jpg') }})"></div> -->
            <div id="profile-picture" style="background-image: url({{ asset('images/default-avatar.png') }})"></div>
            

            <h1 id="user-name-text">
                {{ Auth::user()->name }}
            </h1>

            <a href="#">
                <div id="myPanel">
                    My Account
                </div>
            </a>

            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">

                <div id="logOut">
                    Log out
                </div>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        
        </section>


        <ul id="option-list">

            <a href="/home">
                <li class="menu-option">
                    <span class="material-icons option-icons"> home</span>
                    <span class="option-text">Home</span>
                </li>
            </a>
            
            <a href="/chat">
                <li class="menu-option">
                    <span class="material-icons option-icons">chat</span>
                    <span class="option-text">Chat</span>
                </li>
            </a>

            <a href="#">
                <li class="menu-option">
                    <span class="material-icons option-icons">settings_suggest</span>
                    <span class="option-text">Settings</span>
                </li>
            </a>

            <a href="#">
                <li class="menu-option">
                    <span class="material-icons option-icons">alternate_email</span>
                    <span class="option-text">About</span>
                </li>
            </a>
        </ul>
    </nav>

    @yield('content')
    
</body>
</html>