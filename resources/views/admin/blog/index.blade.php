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
        <div class="row ">
            @if(count($blogs) >0)
            @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="card card-blog">
                  <div class="card-img">
                    <a href="blog-single.html"><img src="/assets/images/blog/{{$blog->img}}" alt="" class="img-fluid" style="max-height: 50vh; width:100%"></a>
                  </div>
                  <div class="card-body">
                    <div class="card-category-box">
                      <div class="card-category">
                        <h6 class="category">{{$blog->category->name}}</h6>
                      </div>
                    </div>
                    <h3 class="card-title"><a href="blog-single.html">{{$blog->title}}</a></h3>
                    <p class="card-description">
                        {{-- {{$blog->body}} --}}
                        {{ Str::limit($blog->body, 50) }}

                    </p>
                  </div>
                  <div class="btn-group mx-auto">
                    <a href="{{route('admin.blog.edit',$blog->id)}}" class="btn btn-info ">Edit</a>
                 <form method="post" action="{{route('admin.blog.destroy',$blog->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                 </form>
                    </div>
                  <div class="card-footer">
                    <div class="post-author">
                      <a href="#">
                        <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                        <span class="author">by Admin</span>
                      </a>
                    </div>
                    <div class="post-date">
                      <span class="ion-ios-clock-outline"></span>  {{ \Carbon\Carbon::parse($blog->created_at)->toFormattedDateString() }}
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