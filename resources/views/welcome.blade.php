@extends('layouts.app')

@section('title', 'Task 04 Solution')

@section('content')
<div class="row fade-in">
    <div class="col-12">
        <!-- Logo Header Section -->
        <div class="row align-items-center mb-5">
           <!-- University Logo -->
            <div class="col-md-4 slide-left">
                <div class="logo-container text-center">
                    <div class="logo-card p-3 rounded shadow-sm">
                        <div class="logo-image-container mb-3" style="height: 100px; display: flex; align-items: center; justify-content: center;">
                            <img src="{{ asset('images/university-logo.png') }}" 
                                 alt="University Logo" 
                                 class="img-fluid h-100" 
                                 style="object-fit: contain; width: auto; max-width: 100%;"
                                 onerror="this.onerror=null; this.src='https://via.placeholder.com/300x100/007bff/ffffff?text=IUG+Logo'">
                        </div>
                        <h5 class="fw-bold">Islamic University Of Gaza IUG</h5>
                        <p class="text-muted mb-2">Computer Engineering Department</p>
                        <small class="text-primary">
                            <i class="fas fa-map-marker-alt me-1"></i> Gaza, Palestine
                        </small>
                    </div>
                </div>
            </div>
            
            <!-- Center Title -->
            <div class="col-md-4 text-center fade-in">
                <h1 class="display-5 mb-2">
                    <i class="fas fa-database text-primary"></i> Task 04
                </h1>
                <p class="lead text-muted">Product Validation & Data Integrity</p>
                <div class="badge bg-primary text-white p-2 mt-2">
                    <i class="fas fa-calendar-alt me-1"></i> December 2025 <i class="fas fa-calendar-alt me-1"></i>
                </div>
            </div>
            
            <!-- Training Company Logo -->
            <div class="col-md-4 slide-right">
                <div class="logo-container text-center">
                    <div class="logo-card p-3 rounded shadow-sm">
                        <div class="logo-image-container mb-3" style="height: 100px; display: flex; align-items: center; justify-content: center;">
                            <img src="{{ asset('images/Shefra-Logo.png') }}" 
                                 alt="Company Logo" 
                                 class="img-fluid h-100" 
                                 style="object-fit: contain; width: auto; max-width: 100%;"
                                 onerror="this.onerror=null; this.src='https://via.placeholder.com/300x100/28a745/ffffff?text=Shifra+Training'">
                        </div>
                        <h5 class="fw-bold">Shifra Training Center</h5>
                        <p class="text-muted mb-2">Back-End {Laravel} Workshop</p>
                        <small class="text-success">
                            <i class="fas fa-certificate me-1"></i> Professional Training
                        </small>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Header -->
        <div class="text-center mb-5 fade-in">
            <h2 class="display-6 mb-3">
                <i class="fas fa-shield-alt text-primary"></i> 
                Laravel Validation & Data Integrity
                <i class="fas fa-shield-alt text-primary"></i>
            </h2>
            <p class="text-muted">Advanced Form Validation and Database Constraints</p>
        </div>
        
        <!-- Task Cards -->
        <div class="row mb-5">
            <div class="col-md-4 mb-4">
                <div class="card h-100 slide-in">
                    <div class="card-header bg-primary text-white">
                        <h4 style="font-size: 1.35rem;"><i class="fas fa-tasks me-2"></i> Part 1: Database Operations</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Product Model</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Database Migration</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Seeder with Factory</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Tinker Testing</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 slide-in">
                    <div class="card-header bg-success text-white">
                        <h4 style="font-size: 1.35rem;"><i class="fas fa-cogs me-2"></i> Part 2: CRUD Operations</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-plus-circle text-info me-2"></i> Create Products</li>
                            <li class="mb-2"><i class="fas fa-eye text-info me-2"></i> Read/View Products</li>
                            <li class="mb-2"><i class="fas fa-edit text-info me-2"></i> Update Products</li>
                            <li class="mb-2"><i class="fas fa-trash text-info me-2"></i> Delete Products</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- NEW CARD FOR TASK04 - Validation & Data Integrity -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 slide-in">
                    <div class="card-header bg-warning text-dark">
                        <h4 style="font-size: 1.35rem;"><i class="fas fa-shield-alt me-2"></i> Part 3: Validation & Integrity</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> Form Request Classes</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> Unique Product Names</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> Price Validation Rules</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> Database Constraints</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> Error Message Display</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> Input Value Preservation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Validation Features Section-->
        <div class="card mb-5 fade-in">
            <div class="card-header bg-gradient-warning text-dark">
                <h4 class="mb-0">
                    <i class="fas fa-clipboard-check me-2"></i>Validation Features Implemented
                </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-warning rounded-circle p-2 me-3">
                                <i class="fas fa-unique text-white"></i>
                            </div>
                            <div>
                                <h5>Unique Product Names</h5>
                                <p class="text-muted mb-0">Prevents duplicate product names in database</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-danger rounded-circle p-2 me-3">
                                <i class="fas fa-dollar-sign text-white"></i>
                            </div>
                            <div>
                                <h5>Price Validation</h5>
                                <p class="text-muted mb-0">Price must be ≥ $0.01 and numeric</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-info rounded-circle p-2 me-3">
                                <i class="fas fa-redo text-white"></i>
                            </div>
                            <div>
                                <h5>Form Request Classes</h5>
                                <p class="text-muted mb-0">Clean separation of validation logic</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-success rounded-circle p-2 me-3">
                                <i class="fas fa-database text-white"></i>
                            </div>
                            <div>
                                <h5>Database Constraints</h5>
                                <p class="text-muted mb-0">UNIQUE index and DECIMAL type enforcement</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary rounded-circle p-2 me-3">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                            <div>
                                <h5>Error Feedback</h5>
                                <p class="text-muted mb-0">Clear error messages under each field</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start">
                            <div class="bg-dark rounded-circle p-2 me-3">
                                <i class="fas fa-history text-white"></i>
                            </div>
                            <div>
                                <h5>Input Preservation</h5>
                                <p class="text-muted mb-0">Old values preserved on validation errors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Action Button -->
        <div class="text-center mb-5 fade-in">
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg float-animation">
                <i class="fas fa-rocket me-2"></i> Launch Product Manager
            </a>
            <a href="{{ route('products.create') }}" class="btn btn-warning btn-lg ms-3 rotate-on-hover">
                <i class="fas fa-plus-circle me-2"></i> Test Validation
            </a>
        </div>
    
        <!-- Quick Stats -->
        <div class="row mb-5">
            <div class="col-md-3 col-6 mb-3">
                <div class="stats-card-alt text-center slide-in">
                    <i class="fas fa-shield-alt fa-2x mb-2 text-warning"></i>
                    <h4>Validation</h4>
                    <small>Secure Input</small>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <div class="stats-card-alt text-center slide-in">
                    <i class="fas fa-database fa-2x mb-2 text-success"></i>
                    <h4>UNIQUE</h4>
                    <small>Constraint</small>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <div class="stats-card-alt text-center slide-in">
                    <i class="fas fa-code fa-2x mb-2 text-primary"></i>
                    <h4>Form Requests</h4>
                    <small>Clean Code</small>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <div class="stats-card-alt text-center slide-in">
                    <i class="fas fa-bolt fa-2x mb-2 text-danger"></i>
                    <h4>Real-time</h4>
                    <small>Error Feedback</small>
                </div>
            </div>
        </div>    
        
        <!-- Validation Rules Demo -->
        <div class="card fade-in mb-4">
            <div class="card-header bg-gradient-info text-white">
                <h5><i class="fas fa-clipboard-list me-2"></i> Validation Rules Implemented</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6><i class="fas fa-plus-circle text-success me-2"></i>StoreProductRequest</h6>
                        <div class="bg-light p-3 rounded mb-3">
                            <code>'name' => 'required|string|max:255|unique:products'</code><br>
                            <code>'price' => 'required|numeric|min:0.01'</code><br>
                            <code>'description' => 'nullable|string|max:1000'</code>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6><i class="fas fa-sync-alt text-warning me-2"></i>UpdateProductRequest</h6>
                        <div class="bg-light p-3 rounded mb-3">
                            <code>'name' => 'required|string|max:255|unique:products,name,{id}'</code><br>
                            <code>'price' => 'required|numeric|min:0.01'</code><br>
                            <code>'description' => 'nullable|string|max:1000'</code>
                        </div>
                    </div>
                </div>
                <div class="alert alert-warning mt-3">
                    <i class="fas fa-lightbulb me-2"></i>
                    <strong>Test these scenarios:</strong> Try creating duplicate product names, entering price as 0, or leaving required fields empty to see validation in action.
                </div>
            </div>
        </div>
        
        <!-- Database Integrity Commands -->
        <div class="card fade-in">
            <div class="card-header bg-dark text-white">
                <h5><i class="fas fa-terminal me-2"></i> Database Integrity Commands</h5>
            </div>
            <div class="card-body">
                <div class="bg-light p-3 rounded mb-3">
                    <code>$ php artisan make:request StoreProductRequest</code><br>
                    <code>$ php artisan make:request UpdateProductRequest</code><br>
                    <code>$ php artisan migrate:fresh</code><br><br>
                    <code>// Test duplicate insertion</code><br>
                    <code>>> Product::create(['name' => 'Test', 'price' => 99.99])</code><br>
                    <code>>> Product::create(['name' => 'Test', 'price' => 88.88]) // Should fail</code>
                </div>
                <small class="text-muted">Database-level constraints prevent invalid data at the source</small>
            </div>
        </div>
    </div>
</div>
@endsection
