@extends('frontend.layouts.main')

@section('content')

<section class="carousel slide cid-re54AshjvP" data-interval="false" id="slider2-t">
<br><br><br><br>
    <div class="container align-center">
    @foreach ($projects as $project)
        <h3>หัวข้อข่าว {{$project->title}}</h3>
        <p>วันที่ {{$project->created_at}}</p>
    @endforeach
    </div><br><br>

    <div class="container content-slider">    
        <div class="content-slider-wrap">
            <div>
                <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#slider2-t" data-slide-to="0"></li>
                        <li data-app-prevent-settings="" data-target="#slider2-t" data-slide-to="1"></li>
                        <li data-app-prevent-settings="" data-target="#slider2-t" class=" active" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/1.jpg);">
                            <div class="container container-slide">                       
                                <div class="image_wrapper">
                                    <div class="mbr-overlay"></div><img src="assets/images/1.jpg">
                                        <div class="carousel-caption justify-content-center"></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/2.jpg);">
                            <div class="container container-slide">
                                <div class="image_wrapper">
                                    <div class="mbr-overlay"></div>
                                    <img src="assets/images/2.jpg">                        
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/3.jpg);">
                            <div class="container container-slide">
                                <div class="image_wrapper">
                                    <div class="mbr-overlay"></div>
                                    <img src="assets/images/3.jpg">                    
                                </div>
                            </div>
                        </div>
                </div>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider2-t">
                    <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider2-t">
                    <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div> 
    </div>
</div>
    <br><br>
    
    <div class="container">
        <p style="text-indent: 2.5em;">
            รายละเอียด.รายละเอียดรายละเอียดรายละเอียดรายละเอียดราย
            ละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดราย
            ละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดราย
            ละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดราย
            ละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดราย
            ละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดราย
            ละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดรายละเอียดราย
        </p>    
    </div>
</section>
@endsection