@extends('frontend.layouts.main')

@section('content')
<section class="features1 cid-education" id="features1-18">
    
    <div class="container">
            <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>
                    ติดต่อเรา</strong></h2><br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                <a  class="nav-link" href="{{url('office')}}">สำนักงาน</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="{{url('education')}}" >สถาบันการศึกษา</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('medical')}}">สถาบันการแพทย์</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('others')}}">ติดต่ออื่นๆ</a>
                </li>
            </ul>
    </div><br>

    <div class="container">
        <div class="media-container-row">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-education1-tab" data-toggle="pill" href="#pills-education1" role="tab" aria-controls="pills-education1" aria-selected="true">โรงเรียน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-education2-tab" data-toggle="pill" href="#pills-education2" role="tab" aria-controls="pills-education2" aria-selected="fales">สถาบันอุดมศึกษา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-education3-tab" data-toggle="pill" href="#pills-education3" role="tab" aria-controls="pills-education3" aria-selected="false">วิทยาลัยพระคริสตธรรม</a>
                </li>
            </ul><br>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-education1" role="tabpanel" aria-labelledby="pills-education1-tab">                    
                <div class="row">
                    @foreach ($others_schools as $others_school)
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact">&nbsp;{{$others_school->contact_name}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            {{$others_school->contact_address}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> {{$others_school->contact_tel}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> {{$others_school->contact_fax}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-envelope"></i> {{$others_school->contact_social}}</li>
                            <li class="list-group-item"><a href="{{url('$others_school->contact_website')}}"><i class="fab fa-chrome"></i>&nbsp;website:{{$others_school->contact_website}} </li></a>
                        </ul>
                    </div> 
                    @endforeach                                     
                </div>                   
            </div>

            <div class="tab-pane fade" id="pills-education2" role="tabpanel" aria-labelledby="pills-education2-tab">                        
                <div class="row">
                @foreach ($others_universitys as $others_university)
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact">&nbsp;{{$others_university->contact_name}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            {{$others_university->contact_address}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์:{{$others_university->contact_fax}}</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: {{$others_university->contact_social}}</li>
                            <li class="list-group-item"><a href="{{url('$others_university->contact_website')}}"><i class="fab fa-chrome"></i>&nbsp;website:{{$others_university->contact_website}} </li></a>
                        </ul>
                    </div>
                    @endforeach 
                </div>
                
            </div>

            <div class="tab-pane fade" id="pills-education3" role="tabpanel" aria-labelledby="pills-education3-tab">
                
                    <div class="row">
                    @foreach ($others_religions as $others_religion)
                    <div class="col-md-6">    
                            <ul class="list-group">
                                <li class="list-group-item pink-c display-contact">&nbsp;{{$others_religion->contact_name}}</li>
                                <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                                {{$others_religion->contact_address}}</li>
                                <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์:{{$others_religion->contact_fax}}</li>
                                <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: {{$others_religion->contact_social}}</li>
                                <li class="list-group-item"><a href="{{url('$others_university->contact_website')}}"><i class="fab fa-chrome"></i>&nbsp;website:{{$others_religion->contact_website}} </li></a>
                            </ul>
                        </div>
                        @endforeach 
                    </div>
                
                </div>
        </div>
    </div>
   
</section>
@endsection