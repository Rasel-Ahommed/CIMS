<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind is included -->
    
    <link rel="stylesheet" href="{{asset("asset/css/style.css")}}">

    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-130795909-1');
    </script>

</head>

<body>
    <nav id="navbar-main" class="navbar is-fixed-top">
        <div class="navbar-brand">
            <a class="navbar-item mobile-aside-button">
                <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
            </a>
            <div class="navbar-item">
                <div class="control"><input placeholder="Search everywhere..." class="input"></div>
            </div>
        </div>
        <div class="navbar-brand is-right">
            <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
                <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
            </a>
        </div>
        <div class="navbar-menu" id="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item dropdown has-divider">
                    <a class="navbar-link">
                        <span class="icon"><i class="mdi mdi-menu"></i></span>
                        <span>Sample Menu</span>
                        <span class="icon">
                            <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="navbar-dropdown">
                        <a href="profile.html" class="navbar-item">
                            <span class="icon"><i class="mdi mdi-account"></i></span>
                            <span>My Profile</span>
                        </a>
                        <a class="navbar-item">
                            <span class="icon"><i class="mdi mdi-settings"></i></span>
                            <span>Settings</span>
                        </a>
                        <a class="navbar-item">
                            <span class="icon"><i class="mdi mdi-email"></i></span>
                            <span>Messages</span>
                        </a>
                        <hr class="navbar-divider">
                        <a href="{{route('logout')}}" class="navbar-item">
                            <span class="icon"><i class="mdi mdi-logout"></i></span>
                            <span>Log Out</span>
                        </a>
                    </div>
                </div>
                <div class="navbar-item dropdown has-divider has-user-avatar">
                    <a class="navbar-link">
                        <div class="user-avatar">
                            <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe"
                                class="rounded-full">
                        </div>
                        <div class="is-user-name"><span>John Doe</span></div>
                        <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                    </a>
                    <div class="navbar-dropdown">
                        <a href="profile.html" class="navbar-item">
                            <span class="icon"><i class="mdi mdi-account"></i></span>
                            <span>My Profile</span>
                        </a>
                        <a class="navbar-item">
                            <span class="icon"><i class="mdi mdi-settings"></i></span>
                            <span>Settings</span>
                        </a>
                        <a class="navbar-item">
                            <span class="icon"><i class="mdi mdi-email"></i></span>
                            <span>Messages</span>
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            <span class="icon"><i class="mdi mdi-logout"></i></span>
                            <span>Log Out</span>
                        </a>
                    </div>
                </div>
                <a href="{{route('logout')}}" title="Log out" class="navbar-item desktop-icon-only">
                    <span class="icon"><i class="mdi mdi-logout"></i></span>
                    <span>Log out</span>
                </a>
            </div>
        </div>
    </nav>

    <aside class="aside is-placed-left is-expanded">
        <div class="aside-tools">
            <div>
                Admin <b class="font-black">One</b>
            </div>
        </div>
        <div class="menu is-menu-main">
            <p class="menu-label">General</p>
            <ul class="menu-list">
                <li class="parent active">
                    <a class="manuItem" href="/dashboard">
                        <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                        <span class="menu-item-label">Dashboard</span>
                    </a>
                </li>
            </ul>
            <p class="menu-label">Examples</p>
            <ul class="menu-list">
                <li class="parent">
                    <a class="manuItem" href="/addCustomer">
                        <span class="icon"><i class="mdi mdi-table"></i></span>
                        <span class="menu-item-label">Add Company</span>
                    </a>
                </li>
             
        </div>
    </aside>

    @yield('adminContante')



        <!-- Scripts below are for demo only -->
        <script src="https://kit.fontawesome.com/81ff3b8c7c.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{asset('asset/js/script.js')}}"></script>
        <script type="text/javascript" src="{{asset('asset/js/main.min.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
        
       
    
</body>

</html>
