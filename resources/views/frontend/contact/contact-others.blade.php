@extends('frontend.layouts.main')

@section('content')
<section class="features1 cid-education" id="features1-18">    
    <div class="container">
        <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>ติดต่อเรา</strong></h2><br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                <a class="nav-link" href="{{url('office')}}">สำนักงาน</a>
                </li>
                <li class="nav-item">
                <a href="{{url('education')}}" class="nav-link">สถาบันการศึกษา</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('medical')}}">สถาบันการแพทย์</a>
                </li>
                <li class="nav-item ">
                <a class="nav-link active" data-toggle="pill" href="{{url('others')}}">ติดต่ออื่นๆ</a>
                </li>
            </ul>
    </div><br>

    <div class="container">
        <div class="media-container-row">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-others1-tab" data-toggle="pill" href="#pills-others1" role="tab" aria-controls="pills-others1" aria-selected="true"> บ้านพัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-others2-tab" data-toggle="pill" href="#pills-others2" role="tab" aria-controls="pills-others2" aria-selected="false"> หน่วยงานอื่นๆ</a>
                </li>
            </ul><br>
        </div>    
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-others1" role="tabpanel" aria-labelledby="pills-others1-tab">                            
                <div class="row"> 
                    @foreach ($others_houses as $others_house)  
                    <div class="col-md-6">    
                        <ul class="list-group">  
                            <li class="list-group-item pink-c display-contact"> {{$others_house->contact_name}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>&nbsp;{{$others_house->contact_address}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: {{$others_house->contact_tel}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: {{$others_house->contact_fax}} </li>
                            <li class="list-group-item cg-c"><i class="fas fa-envelope"></i> อีเมล์: {{$others_house->contact_social}} </li>
                            <li class="list-group-item"><a href="{{url('$others_house->contact_website')}}"><i class="fab fa-chrome"></i>&nbsp; website:{{$others_house->contact_website}}</li></a>
                        </ul>                        
                    </div> 
                    @endforeach
                </div>
            </div>

            <div class="tab-pane fade" id="pills-others2" role="tabpanel" aria-labelledby="pills-others2-tab">            
                <div class="row"> 
                    @foreach ($others as $other)  
                    <div class="col-md-6">    
                        <ul class="list-group">  
                            <li class="list-group-item pink-c display-contact">{{$other->contact_name}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>&nbsp;{{$other->contact_address}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: {{$other->contact_tel}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: {{$other->contact_fax}} </li>
                            <li class="list-group-item cg-c"><i class="fas fa-envelope"></i> อีเมล์: {{$other->contact_social}} </li>
                            <li class="list-group-item"><a href="{{url('$other->contact_website')}}"><i class="fab fa-chrome"></i>&nbsp;website:{{$other->contact_website}} </li></a>
                        </ul>
                        
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
   
</section>
@endsection