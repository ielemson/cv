@if (count($blogs)>0)
  
<section id="blog" class="blog-mf sect-pt4 route">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="title-box text-center">
          <h3 class="title-a">
            Blog
          </h3>
          <p class="subtitle-a">
            I blog for fun, watch out for this space.
          </p>
          <div class="line-mf"></div>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($blogs as $blog)
      <div class="col-md-4">
        <div class="card card-blog">
          <div class="card-img">
            <a href="{{url('blog',$blog->slug)}}"><img src="/assets/images/blog/{{$blog->img}}" alt="{{$blog->title}}" class="img-fluid"></a>
          </div>
          <div class="card-body">
            <div class="card-category-box">
              <div class="card-category">
                <h6 class="category">{{$blog->category->name}}</h6>
              </div>
            </div>
            <h3 class="card-title"><a href="{{url('blog',$blog->slug)}}">{{$blog->title}}</a></h3>
            <p class="card-description">
              {{Str::limit($blog->body,80)}}
            </p>
          </div>
          <div class="card-footer">
            <div class="post-author">
              <a href="#">
                <img src="img/passport.jpeg" alt="" class="avatar rounded-circle">
                <span class="author">Admin</span>
              </a>
            </div>
            <div class="post-date">
              <span class="ion-ios-clock-outline"></span> {{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}
            </div>
          </div>
        </div>
      </div>
     
      @endforeach
    
    </div>
  </div>
</section> 
@endif