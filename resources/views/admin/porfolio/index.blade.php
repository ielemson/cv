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
        <div class="row el-element-overlay">
            @if(count($portfolios) >0)
            @foreach ($portfolios as $portfolio)
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="/assets/images/portfolio/{{$portfolio->img}}" alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="/assets/images/portfolio/{{$portfolio->img}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">{{$portfolio->name}}</h4> <span class="text-muted">{{$portfolio->link}}</span>
                        </div>
                        <div class="el-card-content mx-auto mt-3">
                        <div class="btn-group">
                        <a href="{{route('admin.portfolio.edit',$portfolio->id)}}" class="btn btn-info btn-block">Edit</a>
                     <form method="post" action="{{route('admin.portfolio.destroy',$portfolio->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-block" type="submit">Delete</button>
                     </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div> 
            @endforeach
           
           @endif
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