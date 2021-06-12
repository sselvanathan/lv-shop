<div class="col-lg-9">
    <div class="carousel slide my-4" id="carouselExampleIndicators" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($banners as $key => $banner)
            <li @if ($key === 0 ) class="active" @endif data-target="#carouselExampleIndicators" data-slide-to="{{$key}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($banners as $key => $banner)
                <div class="carousel-item @if ($key === 0 ) active  @endif">
                    <img class="d-block img-fluid banner"
                         src="{{Storage::url($banner->photo)}}"
                         alt="{{$banner->name}}"/>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
