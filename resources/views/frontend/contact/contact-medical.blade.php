@extends('frontend.layouts.main')

@section('content')
<section class="features1 cid-education" id="features1-18">
    
    <div class="container">
            <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>
                    ติดต่อเรา</strong></h2><br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                <a class="nav-link" href="{{url('office')}}">สำนักงาน</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('education')}}">สถาบันการศึกษา</a>
                </li>
                <li class="nav-item ">
                <a class="nav-link active" href="{{url('medical')}}">สถาบันการแพทย์</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('others')}}">ติดต่ออื่นๆ</a>
                </li>
            </ul>
    </div><br><br>

    <div class="container">        
        <div class="row">   
        @foreach ($others_medicals as $others_medical)        
            <div class="col-md-6">                  
                <ul class="list-group">
                    <li class="list-group-item pink-c display-contact"> &nbsp;{{$others_medical->contact_name}}</li>
                    <li class="list-group-item"><i class="icon fa fa-home" aria-hidden="true"></i>
                    {{$others_medical->contact_name}}</li>
                    <li class="list-group-item"><i class="icon fa fa-mobile"></i> โทรศัพท์: {{$others_medical->contact_name}} </li>
                    <li class="list-group-item"><i class="icon fa fa-fax"></i> แฟกซ์:{{$others_medical->contact_name}} </li>
                    <li class="list-group-item"><a href="{{url('$others_medical->contact_name')}}"><i class="fab fa-chrome"></i> https://www.bch.in.th/ </li></a>
                </ul>                               
            </div>           
            @endforeach 
        </div> 
    </div>      
</section>
@endsection