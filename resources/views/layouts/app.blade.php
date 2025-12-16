<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Product CRUD</title>
    
    <!-- Bootstrap 5 -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="{{ asset('font-awesome/css/all.min.css') }}" rel="stylesheet">
    
    <!-- Custom Animations CSS -->
    <link href="{{ asset('bootstrap/css/animations.css') }}" rel="stylesheet">

    <!-- Page-specific styles (minimal) -->
    <style>
        /* I Only keep unique styles here, animations are in animations.css */
        .navbar-brand { font-weight: bold; }
        .btn { transition: all 0.3s; }
        .btn:hover { transform: translateY(-2px); }
        
        .card { 
            border: none; 
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .card:hover { transform: translateY(-5px); }
        
        .table-hover tbody tr { transition: background 0.3s; }
        .table-hover tbody tr:hover { background: rgba(0,123,255,0.1); }
        
        .action-btns .btn { margin: 0 3px; }
        .price-tag { font-weight: bold; color: #28a745; }
        
        .form-control:focus { 
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
        }
        
        .page-title {
            border-left: 5px solid #007bff;
            padding-left: 15px;
            margin-bottom: 30px;
        }
        
        /* Ensure footer stays at bottom */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container.my-4 {
            flex: 1;
        }
        
        footer {
            margin-top: auto;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark slide-in">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-database me-2"></i>Product System
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">
                            <i class="fas fa-boxes me-1"></i>Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.create') }}">
                            <i class="fas fa-plus me-1"></i>Add Product
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-4 page-transition">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show fade-in">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show fade-in">
                <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center text-muted fade-in">
        <div class="container">
            <p class="mb-0">
                <i class="fas fa-code me-2"></i>Laravel Task 04 - Product Validation & Data Integrity
            </p>
            <small>IUG University Training Project</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Custom Animations JS -->
    <script src="{{ asset('bootstrap/js/animations.js') }}"></script>
    
    @stack('scripts') <!-- For page-specific scripts > We can add it if there any in the pages that use this layout < -->
</body>
</html>