<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Bootstrap CSS File -->
        <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/lib/animate/animate.min.css" rel="stylesheet">
        <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="/css/style.css" rel="stylesheet">

        <title>PORTFOLIO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

     
  </head>

  <body id="page-top">
  
     <!--/ Nav Star /-->
     <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll" href="#page-top">My-Portfolio</a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
            aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link js-scroll active" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll" href="{{url('/')}}#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll" href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll" href="{{url('/')}}#work">Work</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll" href="{{url('/')}}#blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll" href="{{url('/')}}#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
  <!--/ Nav End /-->


  
  <!--/ Intro Skew Star /-->
  <div class="intro intro-single route bg-image" style="background-image: url(/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">{{$blog->title}}</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="{{url('/')}}#blog">Blogs</a>
            </li>
            <li class="breadcrumb-item active">Blog</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="post-box">
            <div class="post-thumb">
              <img src="/assets/images/blog/{{$blog->img}}" class="img-fluid" alt="{{$blog->title}}" style="width: 100% ! important;">
            </div>
            <div class="post-meta">
              <h1 class="article-title">{{$blog->title}}</h1>
              <ul>
                <li>
                  <span class="ion-ios-person"></span>
                  <a href="#">Admin</a>
                </li>
                <li>
                  <span class="ion-pricetag"></span>
                  <a href="#">{{$blog->category->name}}</a>
                </li>
                <li>
                  <span class="ion-chatbox"></span>
                  <a href="#">0</a>
                </li>
              </ul>
            </div>
            <div class="article-content">
              <p>
            {{$blog->body}}
              </p>
             
              {{-- <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </blockquote>
              <p>
                Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris blandit
                aliquet elit, eget tincidunt
                nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Donec sollicitudin molestie malesuada.
              </p> --}}
            </div>
          </div>
          {{-- <div class="box-comments">
            <div class="title-box-2">
              <h4 class="title-comments title-left">Comments (34)</h4>
            </div>
            <ul class="list-comments">
              <li>
                <div class="comment-avatar">
                  <img src="img/testimonial-2.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Oliver Colmenares</h4>
                  <span>18 Sep 2017</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
              <li>
                <div class="comment-avatar">
                  <img src="img/testimonial-4.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Carmen Vegas</h4>
                  <span>18 Sep 2017</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis,
                    veritatis deserunt.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
              <li class="comment-children">
                <div class="comment-avatar">
                  <img src="img/testimonial-2.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Oliver Colmenares</h4>
                  <span>18 Sep 2017</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
              <li>
                <div class="comment-avatar">
                  <img src="img/testimonial-2.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Oliver Colmenares</h4>
                  <span>18 Sep 2017</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae natus libero optio.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
            </ul>
          </div> --}}
          <div class="form-comments">
            <div class="title-box-2">
              <h3 class="title-left">
                Leave a Reply
              </h3>
            </div>
            <form class="form-mf">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input-mf" id="inputName" placeholder="Name *" required>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="email" class="form-control input-mf" id="inputEmail1" placeholder="Email *" required>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <input type="url" class="form-control input-mf" id="inputUrl" placeholder="Website">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message"
                      cols="45" rows="8" required></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="button button-a button-big button-rouded" disabled>Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="widget-sidebar sidebar-search">
            <h5 class="sidebar-title">Search</h5>
            <div class="sidebar-content">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary btn-search" type="button">
                      <span class="ion-android-search"></span>
                    </button>
                  </span>
                </div>
              </form>
            </div>
          </div>
         @if (count($recentBlogs)>0)
             @foreach ($recentBlogs as $recent)
             <div class="widget-sidebar">
                <h5 class="sidebar-title">Recent Post</h5>
                <div class="sidebar-content">
                  <ul class="list-sidebar">
                    <li>
                      <a href="{{url('blog',$recent->slug)}}">{{$recent->title}}</a>
                    </li>
                   
                  </ul>
                </div>
              </div>
             @endforeach
         @else
             
         @endif
          {{-- <div class="widget-sidebar">
            <h5 class="sidebar-title">Archives</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <li>
                  <a href="#">September, 2017.</a>
                </li>
                <li>
                  <a href="#">April, 2017.</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
                <li>
                  <a href="#">Atque placeat maiores nam quo autem</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
              </ul>
            </div>
          </div> --}}
         @if (count($tags)>0)
             @foreach ($tags as $tag)
             <div class="widget-sidebar widget-tags">
                <h5 class="sidebar-title">Tags</h5>
                <div class="sidebar-content">
                  <ul>
                    <li>
                      <a href="#">{{$tag->category->name}}</a>
                    </li>
                   
                  </ul>
                </div>
              </div>
             @endforeach
         @else
             
         @endif
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>Soft-Click</strong>. All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  
    <!-- JavaScript Libraries -->
    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/jquery/jquery-migrate.min.js"></script>
    <script src="/lib/popper/popper.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/counterup/jquery.waypoints.min.js"></script>
    <script src="/lib/counterup/jquery.counterup.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/lib/typed/typed.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="/contactform/contactform.js"></script>
  
    <!-- Template Main Javascript File -->
    <script src="/js/main.js"></script>
  
  </body>
  </html>
  
</html>
