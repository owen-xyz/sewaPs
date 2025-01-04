<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Register')</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            font-family: 'Arial', sans-serif;
            color: white;
        }

        .logo {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
            border-radius: 50%;
        }

        .card {
            border: none;
            background: linear-gradient(145deg, #1f2937, #111827);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
        }

        .card-header {
            background-color: #1e293b;
            color: white;
            font-size: 1.5rem;
            text-align: center;
            border-radius: 12px;
        }

        .card-body {
            background-color: #1e293b;
            border-radius: 12px;
            color: white;
        }

        .btn-primary {
            background: linear-gradient(90deg, #3b82f6, #1d4ed8);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #2563eb, #1e40af);
        }

        .form-control {
            background-color: #111827;
            color: white;
            border: 1px solid #374151;
        }

        .form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 5px #3b82f6;
        }
         .icon-eye {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            cursor: pointer;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="card">
                @yield('header')
                <div class="card-header">
                    <img src="image/logo-sewaps.jpg" alt="Logo" class="logo">
                </div>
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- SweetAlert jika login gagal -->
    @if(session('error'))
    <script>
        Swal.fire({
            title: 'Login Gagal!',
            text: "{{ session('error') }}",
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
    
    @endif
<!-- Script untuk toggle password -->
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const passwordField = document.querySelector('#password');

        togglePassword?.addEventListener('click', function () {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
    <!-- CDN Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
