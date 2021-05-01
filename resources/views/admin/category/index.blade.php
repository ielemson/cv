@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard-2</h4>
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
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Category Table</h5>
                    </div>
                    @if (count($categories)>0)
                     @php
                       $num = 1;
                     @endphp
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Category Name</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($categories as $category)
                      
                        <tr>
                          <th scope="row">{{$num}}</th>
                          <td>{{$category->name}}</td>
                          <td>
                            <div class="btn-group">
                          <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-info">Edit</a>
                          <form action="{{route('admin.category.destroy',$category->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                          <button class="btn btn-danger" type="submit">Delete</button>
        
                          </form>
                            </div>
                          </td>
                        </tr>
                        @php
                          $num++
                        @endphp
                        @endforeach
                      </tbody>
                </table>
                   
                 
                    @else
                    <div class="alert alert-info" role="alert">
                      {{'No Category Found! '}}
                      </div>
                    @endif
                   
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