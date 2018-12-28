@extends('frontend.layouts.main')

@section('content')
      
<section class="engine">
    <a >css templates</a>
</section>

<section class="carousel slide cid-rc76yhRH6f" data-interval="false" id="slider1-w">

    

    <div class="full-screen">
        <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider1-w" data-slide-to="0"></li>
                <li data-app-prevent-settings="" data-target="#slider1-w" data-slide-to="1"></li>
                <li data-app-prevent-settings="" data-target="#slider1-w" class=" active" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/1.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay"></div>
                            <img src="assets/images/1.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-center">
                                    <h2 class="mbr-fonts-style display-1">FULL SCREEN SLIDER</h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p>
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn btn-success display-4" href="#">FOR WINDOWS</a> 
                                        <a class="btn  btn-white-outline display-4" href="#">FOR MAC</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/2.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay"></div>
                            <img src="assets/images/2.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-left">
                                    <h2 class="mbr-fonts-style display-1">VIDEO SLIDE</h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">Slide with youtube video background and color overlay. Title and text are aligned to the left.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/3.jpg);">
                <div class="container container-slide">
                    <div class="image_wrapper">
                        <img src="assets/images/3.jpg">
                        <div class="carousel-caption justify-content-center">
                            <div class="col-10 align-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-w">
            <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-w">
                <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                <span class="sr-only">Next</span>
        </a>
    </div>
</div>

</section>

<section class="counters1 counters cid-rbVNHWF1ki" id="counters1-q">
    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(239, 239, 239);">
    </div>

    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2"><strong>
            เกี่ยวกับ</strong></h2>
        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <a href="{{url('mission')}}"><span class="mbr-iconfont mbri-globe-2" style="color: rgb(71, 65, 58); fill: rgb(71, 65, 58);"></span></a>
                        </div>

                        <div class="card-text">
                            <h3 class="pt-3 pb-3 mbr-fonts-style display-5">พันธกิจ</h3>
                        </div>                         
                    </div>
                    <a href="{{url('mission')}}"><span class="d-block p-2 bg-primary text-white display-4">รายละเอียด . . .</span></a>
                </div>
                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <a href="{{url('structure')}}"><span class="mbr-iconfont mbri-bulleted-list" style="color: rgb(71, 65, 58); fill: rgb(71, 65, 58);"></span></a>
                        </div>
                        <div class="card-text">
                            <h3 class="pt-3 pb-3 mbr-fonts-style display-5">
                                  โครงสร้างองค์กร
                            </h3>
                        </div>
                    </div>
                    <a href="{{url('structure')}}"><span class="d-block p-2 bg-primary text-white display-4">รายละเอียด . . .</span></a>
                </div>
                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <a href="{{url('manager')}}"><span class="mbr-iconfont mbri-user" style="color: rgb(71, 65, 58); fill: rgb(71, 65, 58);"></span></a>
                        </div>
                        <div class="card-text">
                            <h3 class="pt-3 pb-3 mbr-fonts-style display-5">
                                  คณะผู้บริหาร
                            </h3>
                        </div>
                    </div>
                    <a href="{{url('manager')}}"><span class="d-block p-2 bg-primary text-white display-4">รายละเอียด . . .</span></a>
                </div>
                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <a href="{{url('history')}}"><span class="mbr-iconfont mbri-opened-folder" style="color: rgb(71, 65, 58); fill: rgb(71, 65, 58);"></span></a>
                        </div>

                        <div class="card-texts">
                            <h3 class="pt-3 pb-3 mbr-fonts-style display-5">
                                  ประวัติศาสตร์
                            </h3>   
                        </div>
                    </div>
                    <a href="{{url('history')}}"><span class="d-block p-2 bg-primary text-white display-4">รายละเอียด . . .</span></a>
                </div>
            </div>
        </div>
   </div>
</section>

<section class="mbr-section content4 cid-rc4WE5tgw1" id="content4-s">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>
                    ข่าวประชาสัมพันธ์</strong></h2>
                
                
            </div>
        </div>
    </div>
</section>

<section class="features8 cid-rbYJPe5G75" id="features8-u">
    <div class="container pt-4 mt-2">
        <div class="media-container-row">
            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <a href="{{url('relations')}}">
                    <span class="mbr-iconfont mbri-flag" style="color: rgb(47, 0, 47); fill: rgb(47, 0, 47);"></span></a>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-5">
                        ข่าวประชาสัมพันธ์</h4>                    
                    <div class="mbr-section-btn text-center"><a href="{{url('relations')}}" class="btn btn-secondary btn-sm">
                        <span class="text-white display-4">อ่านเพิ่มเติม. . .</span></a>
                    </div>
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <a href="{{url('units')}}">
                    <span class="mbr-iconfont mbri-image-gallery" style="color: rgb(47, 0, 47); fill: rgb(47, 0, 47);"></span></a>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-5">ข่าวหน่วยงาน</h4>
                    
                    <div class="mbr-section-btn text-center"><a href="{{url('units')}}" class="btn btn-secondary btn-sm">
                        <span class="text-white display-4">อ่านเพิ่มเติม. . .</span></a>
                    </div>
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <a href="{{url('tender')}}">
                    <span class="mbr-iconfont mbri-file" style="color: rgb(47, 0, 47); fill: rgb(47, 0, 47);"></span></a>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-5">ข่าวประกวดราคา</h4>
                    
                    <div class="mbr-section-btn text-center"><a href="{{url('tender')}}" class="btn btn-secondary btn-sm">
                        <span class="text-white display-4">อ่านเพิ่มเติม. . .</span></a>
                    </div>
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <a href="{{url('jobs')}}">
                    <span class="mbr-iconfont mbri-calendar" style="color: rgb(47, 0, 47); fill: rgb(47, 0, 47);"></span></a>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-5">
                        ข่าวรับสมัครงาน</h4>
                    
                    <div class="mbr-section-btn text-center"><a href="{{url('jobs')}}" class="btn btn-secondary btn-sm">
                        <span class="text-white display-4">อ่านเพิ่มเติม. . .</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="counters1 counters cid-rbWjP69Bsw" id="counters1-t">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(255, 255, 255);">
    </div>

    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2"><strong>
            วารสาร</strong></h2>
        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <a href="{{url('journalch')}}"><span class="mbr-iconfont mbri-windows" style="color: rgb(71, 65, 58); fill: rgb(71, 65, 58);"></span></a>
                        </div>

                        <div class="card-text">
                            <h3 class="pt-3 pb-3 mbr-fonts-style display-5">ข่าวคริสตจักร</h3>   
                        </div>
                    </div>
                    <a href="{{url('journalch')}}"><span class="d-block p-2 bg-primary text-white display-4">รายละเอียด . . .</span></a>
                </div>


                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <a href="{{url('journalup')}}"><span class="mbr-iconfont mbri-help" style="color: rgb(71, 65, 58); fill: rgb(71, 65, 58);"></span></a>
                        </div>
                        <div class="card-text">
                            <h3 class="pt-3 pb-3 mbr-fonts-style display-5">
                                  ห้องชั้นบน</h3> 
                        </div>
                    </div>
                    <a href="{{url('journalup')}}"><span class="d-block p-2 bg-primary text-white display-4">รายละเอียด . . .</span></a>
                </div>

                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <a href="{{url('journalre')}}"><span class="mbr-iconfont mbri-users" style="color: rgb(71, 65, 58); fill: rgb(71, 65, 58);"></span></a>
                        </div>
                        <div class="card-text">
                            <h3 class="pt-3 pb-3 mbr-fonts-style display-5">
                                  สานสัมพันธ์</h3>
                        </div>
                    </div>
                    <a href="{{url('journalre')}}"><span class="d-block p-2 bg-primary text-white display-4">รายละเอียด . . .</span></a>
                </div>


                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <a href="{{url('journaloth')}}"><span class="mbr-iconfont mbri-pages" style="color: rgb(79, 73, 67); fill: rgb(79, 73, 67);"></span></a>
                        </div>

                        <div class="card-texts">
                             <h3 class="pt-3 pb-3 mbr-fonts-style display-5">
                                  วารสารอื่นๆ</h3> 
                        </div>
                    </div>
                    <a href="{{url('journaloth')}}"><span class="d-block p-2 bg-primary text-white display-4">รายละเอียด . . .</span></a>
                </div>
            </div>
        </div>
   </div>
</section>

<section class="mbr-section content4 cid-rc51DKBWeq" id="content4-t">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>บทความ</strong></h2>    
                </div>
            </div>
        </div>
    </section>

<section class="features18 popup-btn-cards cid-rbWtKEorV0" id="features18-z">
    <div class="container">
        <div class="media-container-row pt-4">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper ">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center"><a href="articles-general.html" class="btn btn-info display-4">อ่านบทความทั่วไป</a></div>
                        <img src="assets/images/01.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-5">
                            บทความทั่วไป</h4>
                        
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center"><a href="articles-sermons.html" class="btn btn-info display-4">อ่านคำเทศนา</a></div>
                        <img src="assets/images/02.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-5">
                            คำเทศนา</h4>
                        
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center"><a href="articles-testimonies.html" class="btn btn-info display-4">อ่านคำพยาน</a></div>
                        <img src="assets/images/03.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-5">คำพยาน</h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="header4 cid-rbWpmiyScO " id="header4-x">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(239, 239, 239);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="media-content col-md-10" style="margin-bottom: 40px">
                <h1 class="mbr-section-title align-center mbr-white pb-3 mbr-bold mbr-fonts-style display-2">ปฏิทิน</h1>
                
                <div class="mbr-text align-center mbr-white pb-3">
                    
                </div>
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-info display-7" href="#">วันหยุดสภาคริสตจักรฯ 2019</a>
                    <a class="btn btn-md btn-secondary-outline display-7" href="#">กำหนดการประชุมประจำปี 2019</a></div>
            </div>
            
            <div class="col-md-7">
                <img src="assets/images/screen-shot-2016-05-03-at-5.43.27-pm-963x671.png" alt="Mobirise" title="" style="width: 100%; height:100%">
            </div>
            <div class="col-md-5">
                    <div class="container">
                            
                            <table class="table table-hover display-4">
                              <thead>
                                <tr>
                                  <th>วันที่</th>
                                  <th>รายการ</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>2 ธ.ค. 61</td>
                                  <td>วันคัมภีร์สากล</td>
                            
                                </tr>
                                <tr>
                                  <td>2 ธ.ค. 61</td>
                                  <td>วันเริ่มเทศกาลเตรียมรับเสด็จ</td>
                           
                                </tr>
                                <tr>
                                  <td>4 ธ.ค. 61</td>
                                  <td>การประชุมคณะผู้บริหารสภาคริสตจักรในประเทศไทย</td>
                           
                                </tr>
                                      <tr>
                                  <td>2 ธ.ค. 61</td>
                                  <td>วันคัมภีร์สากล</td>
                            
                                </tr>
                                <tr>
                                  <td>2 ธ.ค. 61</td>
                                  <td>วันเริ่มเทศกาลเตรียมรับเสด็จ</td>
                           
                                </tr>
                                <tr>
                                  <td>4 ธ.ค. 61</td>
                                  <td>การประชุมคณะผู้บริหารสภาคริสตจักรในประเทศไทย</td>
                           
                                </tr>
                                            <tr>
                                  <td>2 ธ.ค. 61</td>
                                  <td>วันคัมภีร์สากล</td>
                            
                                </tr>
                                <tr>
                                <td>4 ธ.ค. 61</td>
                                <td>การประชุมคณะผู้บริหารสภาคริสตจักรในประเทศไทย</td>
                            
                                </tr>
                                            <tr>
                                <td>2 ธ.ค. 61</td>
                                <td>วันคัมภีร์สากล</td>
                            
                                </tr>
                                <tr>
                                <td>4 ธ.ค. 61</td>
                                <td>การประชุมคณะผู้บริหารสภาคริสตจักรในประเทศไทย</td>
                            
                                </tr>
                                            <tr>
                                <td>2 ธ.ค. 61</td>
                                <td>วันคัมภีร์สากล</td>
                            
                                </tr>

                              </tbody>
                            </table>
                          </div>
            </div>
        </div>
    </div>
</section>

@endsection
