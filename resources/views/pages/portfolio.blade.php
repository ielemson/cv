@if (count($portfolios)>0)

<section id="work" class="portfolio-mf sect-pt4 route">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="title-box text-center">
          <h3 class="title-a">
            Portfolio
          </h3>
          <p class="subtitle-a">
         Here are my portofolio catalogues,desgined using different technologies.
          </p>
          <div class="line-mf"></div>
        </div>
      </div>
    </div>

    <div class="row">
@foreach ($portfolios as $portfolio)
<div class="col-md-4">
  <div class="work-box">
    <a href="{{$portfolio->link}}" target="_blank">
      <div class="work-img">
        <img src="/assets/images/portfolio/{{$portfolio->img}}" alt="" class="img-fluid">
      </div>
      <div class="work-content">
        <div class="row">
          <div class="col-sm-8">
            <h2 class="w-title">{{$portfolio->name}}</h2>
            <div class="w-more">
              <span class="w-ctegory">{{$portfolio->category->name}}</span> / <span class="w-date"> {{ \Carbon\Carbon::parse($portfolio->created_at)->diffForHumans() }}</span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="w-like">
              <span class="ion-ios-plus-outline"></span>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>
</div>  
@endforeach
  
         
    </div>
  </div>
</section>
@endif