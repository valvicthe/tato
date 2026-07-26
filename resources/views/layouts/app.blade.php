<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tato</title>
    
    <!-- Roblox 2020 Dark Theme Styles (CSS) -->
    <style>
        :root {
            --bg-color: #191B1D;
            --card-bg: #232527;
            --topbar-bg: #232527;
            --sidebar-bg: #191B1D;
            --text-color: #FFFFFF;
            --text-muted: #BDC3C7;
            --accent-green: #00A2FF; /* Tato blue accent */
            --border-color: #393B3D;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Hanken Grotesk', 'Gotham', sans-serif;
        }

        /* Top Navigation Bar */
        .navbar {
            height: 40px;
            background-color: var(--topbar-bg);
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 15px;
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 1000;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 20px;
            color: #FFF;
            text-decoration: none;
            margin-right: 20px;
        }

        .navbar-nav {
            display: flex;
            list-style: none;
            margin: 0; padding: 0;
            gap: 15px;
        }

        .navbar-nav a {
            color: var(--text-color);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }

        .navbar-search {
            flex-grow: 1;
            max-width: 400px;
            margin: 0 20px;
        }

        .navbar-search input {
            width: 100%;
            background: #111213;
            border: 1px solid var(--border-color);
            padding: 5px 10px;
            border-radius: 4px;
            color: #FFF;
        }

        /* Sidebar */
        .sidebar {
            width: 180px;
            position: fixed;
            top: 40px; bottom: 0; left: 0;
            background-color: var(--sidebar-bg);
            border-right: 1px solid var(--border-color);
            padding-top: 15px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0; margin: 0;
        }

        .sidebar-menu li a {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            color: var(--text-color);
            text-decoration: none;
            font-size: 14px;
        }

        .sidebar-menu li a:hover, .sidebar-menu li.active a {
            background-color: rgba(255, 255, 255, 0.05);
            font-weight: bold;
        }

        /* Main Container */
        .main-content {
            margin-top: 40px;
            margin-left: 180px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Top Header -->
    <nav class="navbar">
        <div style="display: flex; align-items: center;">
            <a href="{{ route('home') }}" class="navbar-brand">Tato</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('games') }}">Discover</a></li>
                <li><a href="{{ route('catalog') }}">Avatar Shop</a></li>
                <li><a href="{{ route('develop') }}">Create</a></li>
                <li><a href="{{ route('robux') }}">Robux</a></li>
            </ul>
        </div>

        <div class="navbar-search">
            <input type="text" placeholder="Search games, users, or catalog...">
        </div>

        <div style="display: flex; align-items: center; gap: 15px;">
            <span>🪙 <strong>{{ Auth::user()->robux ?? 0 }}</strong></span>
            <a href="{{ route('my.settings') }}">⚙️</a>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="sidebar">
        <ul class="sidebar-menu">
            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="{{ request()->routeIs('users.profile') ? 'active' : '' }}">
                <a href="{{ route('users.profile', Auth::id() ?? 1) }}">Profile</a>
            </li>
            <li class="{{ request()->routeIs('my.messages') ? 'active' : '' }}">
                <a href="{{ route('my.messages') }}">Messages</a>
            </li>
            <li class="{{ request()->routeIs('my.avatar') ? 'active' : '' }}">
                <a href="{{ route('my.avatar') }}">Avatar</a>
            </li>
            <li class="{{ request()->routeIs('users.inventory') ? 'active' : '' }}">
                <a href="{{ route('users.inventory', Auth::id() ?? 1) }}">Inventory</a>
            </li>
            <li class="{{ request()->routeIs('my.groups') ? 'active' : '' }}">
                <a href="{{ route('my.groups') }}">Groups</a>
            </li>
            <li class="{{ request()->routeIs('my.transactions') ? 'active' : '' }}">
                <a href="{{ route('my.transactions') }}">Trade</a>
            </li>
        </ul>
    </aside>

    <!-- 3. Dynamic Page View Content -->
    <main class="main-content">
        @yield('content')
    </main>

</body>
</html>
