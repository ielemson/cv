@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{-- flash meddage --}}
                @include('admin.partials._alerts')
                {{-- flash meddage --}}
                <div class="card">
                    <form class="form-horizontal" method="POST" action="{{route('admin.portfolio.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Create Portfolio</h4>
               
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="row mb-3">
        
                                        <div class="col-lg-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="art name" placeholder="Portfolio Name" autofocus>
        
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
        
                                        <div class="col-lg-6">
                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category_id">
                                                <option value="">Select Category</option>
                                                @if (count($categories)>0)
                                                
                                                @foreach ($categories as $category)
                                                
                                                <option value="{{$category->id}}">{{$category->name}}</option>
        
                                                @endforeach
                        
                                                @else
                                                    No Category
                                                @endif
                                            </select>
                                            
                                            @error('category_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
        
        
                                    <div class="row mb-3">
        
                                        <div class="col-lg-6">
                                            <input id="link" type="url" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" required autocomplete="Portolio Link" placeholder="Portolio Link" >
        
                                            @error('link')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6">
                                            <input id="img" type="file" class="form-control @error('img') is-invalid @enderror" name="img"  required >
        
                                            @error('img')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                 
        
                                     
                                        
                                   
                                   
                                </div>
                            </div>
                           
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Create Portfolio</button>
                            </div>
                        </div>
                    </form>
                </div>
            
        
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
@endsection