@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="row justify-content-center fade-in">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">
                    <i class="fas fa-edit me-2"></i>Edit Product: {{ $product->name }}
                </h4>
            </div>

            {{-- ! validation summary: shows up only if there are any error in the form request --}}
            @if($errors->any()) 
                <div class="alert alert-danger">
                    <h5><i class="fas fa-exclamation-triangle me-2"></i>Please fix the following errors:</h5>
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                </div>
            @endif

            <div class="card-body">
                <form action="{{ route('products.update', $product) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">
                            <i class="fas fa-tag me-1"></i>Product Name
                        </label>
                        <input type="text" 
                               class="form-control @error('name') is-invalid @enderror" 
                               id="name" 
                               name="name" 
                               value="{{ old('name', $product->name) }}"
                               required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="price" class="form-label">
                            <i class="fas fa-dollar-sign me-1"></i>Price
                        </label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" 
                                   step="0.01" 
                                   min="0.01"
                                   max="999999.99"
                                   class="form-control @error('price') is-invalid @enderror" 
                                   id="price" 
                                   name="price" 
                                   value="{{ old('price', isset($product) ? $product->price : '') }}"
                                   placeholder="0.00"
                                   required>
                        </div>
                            @error('price')
                                <div class="invalid-feedback d-block">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                            @enderror       
                    </div>
                    
                    <div class="mb-4">
                        <label for="description" class="form-label">
                            <i class="fas fa-align-left me-1"></i>Description
                        </label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" 
                                  name="description" 
                                  rows="4">{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('products.index') }}" 
                           class="btn btn-secondary me-md-2">
                            <i class="fas fa-times me-1"></i>Cancel
                        </a>
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-sync-alt me-1"></i>Update Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Product Info -->
        <div class="card mt-4 slide-in">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">
                    <i class="fas fa-info-circle me-2"></i>Product Information
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>ID:</strong> #{{ $product->id }}</p>
                        <p><strong>Current Price:</strong> ${{ number_format($product->price, 2) }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Created:</strong> {{ $product->created_at->format('M d, Y') }}</p>
                        <p><strong>Last Updated:</strong> {{ $product->updated_at->format('M d, Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection