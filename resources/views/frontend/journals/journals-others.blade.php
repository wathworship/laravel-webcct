@extends('frontend.layouts.main')

@section('content')
<section class="mbr-section content4 cid-rcsSH1EerQ" id="content4-v">
    <div class="container"><br>
        <div class="media-container-row align-center">
            <div class="title col-12 col-md-8">
                <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2"><strong>วารสาร</strong></h2>               
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content8 cid-rcsWc7NBvT" id="content8-x">
    <div class="align-items-center">
        <div class="media-container-row title">
            <div class="col-12 col-md-8">
                <div class="mbr-section-btn align-center">
                    <a class="btn btn-secondary-outline display-j" href="{{url('journalch')}}">ข่าวคริสตจักร</a>
                    <a class="btn btn-secondary-outline display-j" href="{{url('journalup')}}">ห้องชั้นบน</a> 
                    <a class="btn btn-secondary-outline display-j" href="{{url('journalre')}}">สานสัมพันธ์</a> 
                    <a class="btn btn-secondary display-j" href="{{url('journaloth')}}">วารสารอื่นๆ</a>
                </div>
            </div>
        </div>
    </div>
          
     <section class="features18 popup-btn-cards cid-rbWtKEorV0" id="features18-z"> 
        <div class="container"> 
            <div class="row pt-4">

                @foreach ($journals as $journal)
                <div class="card p-3 col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <div class="mbr-overlay"></div>
                            <div class="mbr-section-btn text-center"><a target="_blank" href="pdf/journal/jn-oth/{{$journal->journals_file}}" class="btn btn-info display-4"><span class="mbri-download mbr-iconfont mbr-iconfont-btn"></span>ดาวน์โหลด</a></div>
                            <img src="images/journal/journal-oth/{{$journal->journals_cover}}" alt="Mobirise">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-j">
                                {{$journal->issue}}</h4>                        
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <br>
            <div class="media-container-row align-center">
            {!! $journals->links() !!}
            </div><br>
        </div>
    </section>
    
    



@endsection