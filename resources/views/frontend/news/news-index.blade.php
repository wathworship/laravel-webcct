@extends('frontend.layouts.main')

@section('content')
<section class="timeline1 cid-rc2xUN6knt" id="timeline1-2b">
    <div class="container align-center">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2"><strong>
            ข่าวประชาสัมพันธ์</strong><br><strong><br></strong>
        </h2>
        <div class="container timelines-container" mbri-timelines="">     
            @foreach ($news as $new)     
            <div class="row timeline-element  separline">
                <div class="timeline-date-panel col-xs-12 col-md-6 align-left">
                    <div class="time-line-date-content">
                        <div class="time-line-date-content">   
                            <div class="card-wrapper ">
                                <div class="card-img">  
                                    <div href="#lb-gallery1-22" data-slide-to="0" data-toggle="modal">                         
                                        <img src="assets/images/n2.jpg" alt="#">                          
                                        <span class="d-block p-2 bg-primary text-white display-7">{{ $new->users_iduser }}</span>
                                    </div>                               
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-6 align-left ">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">                       
                        {{ $new->title }}
                        </h4>
                        <p>วันที่ {{ $new->created_at }}</p><br>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">{{ $new->description }} </p>
                        <div class="mbr-section-btn text-center">
                            <a href="{{ URL::to('detail',{$new->idt_news}") }}" class="btn btn-secondary btn-sm"><span class="text-white display-4">อ่านเพิ่มเติม. . .</span></a>
                        </div>
                    </div>
                </div>
            </div> 
            @endforeach              
        </div>
    </div>
</section>
@endsection