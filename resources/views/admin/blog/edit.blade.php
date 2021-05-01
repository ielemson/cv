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
                    <form class="form-horizontal" method="POST" action="{{route('admin.blog.update',$blog->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <h4 class="card-title">Edit Blog</h4>
               
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="row mb-3">
        
                                        <div class="col-lg-6">
                                            <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $blog->title }}" required autocomplete="blog title" placeholder="Blog Title" autofocus>
        
                                            @error('title')
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
                                                @if ($category->id == $blog->category_id)
                                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                                @else
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endif
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
                                            <textarea class="form-control @error('body') is-invalid @enderror" name="body" rows="5" required placeholder="Write your blog here......" >{{$blog->body}}</textarea>
        
                                            @error('body')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6">
                                            <input id="img" type="file" class="form-control @error('img') is-invalid @enderror" name="img"  >
        
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
                                <button type="submit" class="btn btn-primary">Update Blog</button>
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