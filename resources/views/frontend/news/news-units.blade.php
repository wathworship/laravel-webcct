@extends('frontend.layouts.main')

@section('content')
<section class="timeline1 cid-rc2z7CVKGP" id="timeline1-2d">
   <div class="container align-center">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2"><strong>
            ข่าวหน่วยงาน</strong><br><strong><br></strong>
        </h2>        
        <div class="container timelines-container" mbri-timelines="">
        @foreach ($news as $new)
            <div class="row timeline-element reverse separline">      
                 <div class="timeline-date-panel col-xs-12 col-md-6  align-right">         
                    <div class="time-line-date-content"> 
                        <div class="card-wrapper ">
                            <div class="card-img">                           
                                <div href="#lb-gallery1-22" data-slide-to="0" data-toggle="modal">                         
                                    <img src="assets/images/3.jpg" alt="Mobirise">                         
                                      <span class="d-block p-2 bg-primary text-white display-7">{{$new->id_newstype}}</span>                                
                                </div>                              
                            </div>
                            
                        </div>
                    </div>
                </div>
                <span class="iconBackground"></span>
                    <div class="col-xs-12 col-md-6 align-left">
                        <div class="timeline-text-content">
                            <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">                              
                            {{ $new->title }}
                            </h4>
                            <p>วันที่</p><br>
                            <p class="mbr-timeline-text mbr-fonts-style display-7">
                            เกริ่นนำ {{ $new->description }}   
                            </p>
                            <div class="mbr-section-btn text-center">
                                <a href="#" class="btn btn-secondary btn-sm"><span class="text-white display-4">อ่านเพิ่มเติม. . .</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach               
        </div>
    </div>
</section>
   
@endsection