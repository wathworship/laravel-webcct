@extends('frontend.layouts.main')

@section('content')
<section class="mbr-section content4 cid-rc79DE8iQM" id="content4-z">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>
                    ติดต่อเรา</strong></h2>
            </div>
        </div>
    </div>
</section>

<section class="features8 cid-rc79zIQnGy" id="features8-y">
    <div class="container">
        <div class="media-container-row">

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <a href="{{url('office')}}"><i class="far fa-building fa-6x" style="color: rgb(47, 0, 47); fill: rgb(47, 0, 47);"></i></a>
                </div>
                <div class="card-box align-center">
                    <a href="{{url('office')}}"><h4 class="card-title mbr-fonts-style display-5">สำนักงาน</h4></a>    
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <a href="{{url('education')}}"><i class="fas fa-graduation-cap fa-6x" style="color: rgb(47, 0, 47); fill: rgb(47, 0, 47);"></i></a>
                </div>
                <div class="card-box align-center">
                    <a href="{{url('education')}}"><h4 class="card-title mbr-fonts-style display-5">
                        สถาบันการศึกษา</h4></a>
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <a href="{{url('medical')}}"><i class="mbr-iconfont fas fa-user-md fa-6x" style="color: rgb(47, 0, 47); fill: rgb(47, 0, 47);"></i></a>
                </div>
                <div class="card-box align-center">
                    <a href="{{url('medical')}}"><h4 class="card-title mbr-fonts-style display-5">สถาบันการแพทย์</h4></a>
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <a href="{{url('others')}}"><i class="fas fa-phone fa-6x" style="color: rgb(47, 0, 47); fill: rgb(47, 0, 47);"></i></a>
                </div>
                <div class="card-box align-center">
                    <a href="{{url('others')}}"><h4 class="card-title mbr-fonts-style display-5">
                        ติดต่ออื่นๆ</h4></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection