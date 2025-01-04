<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        body {
            background-color: #f1f5f9;
            /* Warna abu-abu terang */
            font-family: 'Arial', sans-serif;
        }

        .sidebar {
            background-color: #1e293b;
            /* Warna abu-abu tua */
            color: #e2e8f0;
            /* Warna font abu terang */
            min-height: 100vh;
            position: fixed;
            width: 250px;
            transition: width 0.3s;
            overflow: hidden;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar .logo {
            text-align: center;
            padding: 15px 10px;
            border-bottom: 1px solid #334155;
        }

        .sidebar .logo img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            transition: width 0.3s, height 0.3s;
        }

        .sidebar.collapsed .logo img {
            width: 40px;
            height: 40px;
        }

        .sidebar .logo h5 {
            margin-top: 10px;
            font-size: 18px;
        }

        .sidebar.collapsed .logo h5 {
            display: none;
            /* Sembunyikan nama profil jika sidebar tertutup */
        }

        .sidebar .menu-item a {
            color: #e2e8f0;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar .menu-item a i {
            margin-right: 10px;
        }

        .sidebar.collapsed .menu-item a span {
            display: none;
            /* Sembunyikan teks menu jika sidebar tertutup */
        }

        .sidebar .menu-item a:hover {
            background-color: #334155;
            /* Biru tua */
        }

        .menu-item a.active {
            background-color: #334155;
            /* Warna background menu aktif */
            color: #ffffff;
            /* Warna teks menu aktif */
            font-weight: bold;
            border-radius: 5px;
        }



        .navbar {
            margin-left: 250px;
            background-color: #1e293b;
            /* Warna navbar sama dengan sidebar */
            color: white;
            padding: 15px;
            transition: margin-left 0.3s;
        }

        .navbar.collapsed {
            margin-left: 70px;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        .content.collapsed {
            margin-left: 70px;
        }

        .toggle-btn {
            cursor: pointer;
        }

        span {
            margin: 10px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            color: white;
        }

        .user-profile img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            object-fit: cover;
        }

        .user-profile span {
            margin-left: 8px;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <img src="image/logo-sewaps.jpg" alt="Logo">
            <h5 class="mt-2 d-none d-md-block">Sewa PS</h5>
        </div>
        <div class="menu-item">
            <a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">
                <i data-feather="home"></i> <span>Beranda</span>
            </a>
        </div>
        <div class="menu-item">
            <a href="#" class="{{ Request::is('riwayat*') ? 'active' : '' }}">
                <i data-feather="clock"></i> <span>Riwayat</span>
            </a>
        </div>
        <div class="menu-item">
            <a href="{{ route('penyewa') }}" class="{{ Request::routeIs('penyewa') ? 'active' : '' }}">
                <i data-feather="users"></i> <span>Penyewa</span>
            </a>
        </div>
        <div class="menu-item">
            <a href="{{ route('logout') }}">
                <i data-feather="log-out"></i> <span>Logout</span>
            </a>
        </div>
    </div>
    <!-- Navbar -->
    <div class="navbar" id="navbar">
        <span class="toggle-btn" onclick="toggleSidebar()">
            <i data-feather="menu"></i>
        </span>
        <div class="user-profile">
            <!-- Foto profil pengguna -->
            <img src="{{ asset('storage/images/default-profile.jpg') }}" alt="Profile" class="rounded-circle"
                style="width: 40px; height: 40px;">
            <span>{{ Auth::user()->name }}</span>
        </div>
    </div>

    <!-- Content -->
    <div class="content" id="content">
        @yield('content')
    </div>

    <!-- Feather Icons Script -->
    <script>
        feather.replace();

        const toggleSidebar = () => {
            const sidebar = document.getElementById('sidebar');
            const navbar = document.getElementById('navbar');
            const content = document.getElementById('content');
            sidebar.classList.toggle('collapsed');
            navbar.classList.toggle('collapsed');
            content.classList.toggle('collapsed');



        }
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
